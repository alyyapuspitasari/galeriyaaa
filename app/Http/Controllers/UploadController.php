<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\album;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function posting()
    {
    $album = album::all();
    return view('posting', compact('album'));
    }

    public function up_foto(Request $request)
    {
        //logika penyimpanan foto
        $filename = pathinfo($request->filefoto, PATHINFO_FILENAME);

        $extension = $request->filefoto->getClientOriginalExtension();
        $namafoto = 'foto'. time(). '.' . $extension;
        $request->filefoto->move('foto', $namafoto);

        $datasimpan = [
            'users_id' => auth()->user()->id,
            'album_id' => $request->nama_album,
            'judul_foto' => $request->judul_foto,
            'deskripsi_foto' => $request->deskripsi_foto,
            'lokasi_file' => $namafoto
        ];
        foto::create($datasimpan);
        // Alert::success('upload berhasil', 'anda telah berhasil upload foto')
        return redirect('/explore');
    }

    public function tambah_album(Request $request)
    {
        $data = [
            'users_id'      => auth()->user()->id,
            'nama_album'    => $request->nama_album,
            // 'deskripsi'     => $request->deskripsi_album
        ];
        album::create($data);
        return redirect('/posting');
    }
}
