<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\User;
use App\Models\album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function cek_register(Request $request)
    {
        $message = [
            'user.required'         => 'Username wajib diisi',
            'username unique'       => 'Username sudah terdaftar',
            'password.required'     => 'Password minimal 8 karakter',
            'password.min'          => 'Password minimal 8 karakter',
            'email.required'        => 'Emailwajib diisi',
            'email.unique'          => 'Email wajib diisi'
        ];
        //validasi
        $request->validate([
            'username'      => 'required|unique :users,username',
            'password'      => 'required|min:8',
            'email'         => 'required|unique:users,email'
        ], $message);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        User::create($data);
        return redirect('/login');
    }

    public function proses_login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/explore');
            echo "<script>alert('berhasil login'); window.location.href='/explore';</script>";
        } else {
            echo "<script>alert('gagal login'); window.location.href='login';</script>";
        }
    }

    public function profile(Request $request)
    {
        $unggahan = foto::with('User')->orderBy('id', 'DESC')->where('users_id', auth()->user()->id)->get();
        $dataprofile   = User::where('id', auth()->user()->id)->first();

        return view('/profile', compact('dataprofile', 'unggahan'));
    }
    // public function profileedit(){
    //     $data = [
    //         'dataprofile'   => User::where('id',auth()->user()->id)->first()
    //     ];
    // }
    public function updateprofile(Request $request)
    {
        $dataUpdate = [];

        if ($request->hasFile('picture')) {
            $filename = pathinfo($request->picture, PATHINFO_FILENAME);

            $extension = $request->picture->getClientOriginalExtension();
            $namafoto = 'foto_profile' . time() . '.' . $extension;
            $request->picture->move('foto_profile', $namafoto);

            // Update the 'profile' field only if a file is uploaded
            $dataUpdate['picture'] = $namafoto;
        }
        // Update data lainnya
        $dataUpdate += [
            'name_lengkap' => $request->name_lengkap,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($dataUpdate);
        return redirect('/profile');
    }
    public function edit_profile()
    {
        $dataprofile = User::where('id', auth()->user()->id)->first();
        return view('edit_profile', compact('dataprofile'));
    }

    public function up_profile(Request $request)
    {
        $dataUpdate = [
            'name_lengkap' => $request->name_lengkap,
            'username' => $request->username,
            'alamat' => $request->alamat
        ];
        User::where('id', auth()->user()->id)->update($dataUpdate);
        return redirect('/edit_profile');
    }
    public function ubah_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }

        $update_password = [
            'password'  => bcrypt($request->password),
        ];
        //     //proses simpan
        User::where('id', auth()->user()->id)->update($update_password);
        return redirect('/profile')->with('success', 'Password berhasil diubah ');
    }



    //user-profile
    public function profil_other(Request $request, $id)
    {
        $profile = Foto::where('users_id', $id)->first();
        return view('pages.profil_user', compact('profile'));
    }
    public function getData(Request $request, $id)
    {
        $dataUser   = User::where('id', $id)->first();
        return response()->json([
            'dataUser'  => $dataUser
        ], 200);
    }

    public function getdataa(Request $request)
    {
        $beranda = Foto::with(['like'])->orderBy('id', 'DESC')->where('users_id', $request->idUser)->paginate(4);
        return response()->json([
            'data'  => $beranda,
            'statuscode'    => 200,
            'idUser'    => auth()->user()->id
        ]);
    }

    // $request->validate([
    //     'email' => 'required',
    //     'password' => 'required'
    // ]);

    // if(Auth::attemp(['email' =>$required->email, 'password' =>$request->password]))
    // {
    //     $request->session()->regenerate();
    //     return redirect('/explore');
    // }{
    //     return redirect()->back()->with('eror', 'email atau password salah');
    //     echo"gagal login co";
    // }


    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }

    public function show($id)
    {
        $album = album::with('foto')->findOrFail($id);
        return view('isi_album', compact('album'));
    }
    public function album(Request $request)
    {
        $tampilAlbum = album::with('foto')->where('users_id', auth()->user()->id)->get();
        return view('album', compact('tampilAlbum'));
    }
}
