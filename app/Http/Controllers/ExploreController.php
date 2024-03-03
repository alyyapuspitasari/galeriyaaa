<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\like;
use App\Models\komen;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function getData(Request $request)
    {
        $explore = foto::with(['like', 'user'])->orderBy('id', 'DESC')->withCount(['like', 'komen'])->paginate(4);
        return response()->json([
            'data'  => $explore,
            'statuscode'    => 200,
            'idUser'    => auth()->user()->id
        ]);
    }


    // public function likes(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'idfoto' => 'required',
    //         ]);

    //         $existingLike = like::where('foto_id', $request->idfoto)->where('users_id', auth()->user()->id)->first();
    //         if(!$existingLike ){
    //              $dataSimpan = [
    //                 'foto_id'   => $request->idfoto,
    //                 'users_id'   => auth()->user->id
    //              ];
    //              like::create($dataSimpan);
    //         } else {
    //              like::where('foto_id', $request->idfoto)->where('users_id', auth()->user()->id)->delete();
    //         }

    //         return response()->json('Data Berhasil di simpan', 200);
    //     } catch (\Throwable $th) {
    //         return response()->json('Something went wrong', 500);
    //     }
    // }

    //like
    public function likes(Request $request)
    {
        try {
            $request->validate([
                'fotoid' => 'required'
            ]);

            $existingLike = like::where('foto_id', $request->fotoid)->where('users_id', auth()->user()->id)->first();
            if (!$existingLike) {
                $dataSimpan = [
                    'foto_id'       => $request->fotoid,
                    'users_id'       => auth()->user()->id
                ];
                like::create($dataSimpan);
            } else {
                like::where('foto_id', $request->fotoid)->where('users_id', auth()->user()->id)->delete();
            }

            return response()->json('Data Berhasil Di Simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Something went wrong', 500);
        }
    }

    public function getdatadetail(Request $request, $id){
        $dataDetailFoto = foto::with('user')->where('id', $id)->firstOrFail();
        return response()->json([
            'dataDetailFoto'    => $dataDetailFoto
        ], 200);
    }

    public function ambildatakomentar(Request $request, $id) {
        $ambildatakomentar = komen::with('user')->where('foto_id', $id)->get();
        return response()->json([
            'data'  => $ambildatakomentar
        ], 200);
    }




    public function kirimkomentar(Request $request)
    {
        try {
            $request->validate([
                'idfoto'    =>'required',
                'isi_komentar'  =>'required'
            ]);
            $dataStoreKomentar = [
                'users_id'   => auth()->user()->id,
                'foto_id'   => $request->idfoto,
                'isi_komentar'  => $request->isi_komentar
            ];
            komen::create($dataStoreKomentar);
            return response()->json([
                'data'      => 'data berhasil disimpan'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json('data gagal disimpan', 500);
        }
    }

}
//     {
//         try {
//             $request->validate([
//                 'fotoid'    => 'required',
//                 'isi_komentar'  => 'required'
//             ]);
//             $dataStoreKomentar = [
//                 'users_id'   => auth()->user()->id,
//                 'foto_id'   => $request->fotoid,
//                 'isi_komentar'  => $request->isi_komentar
//             ];
//             Komentar::create($dataStoreKomentar);
//             return response()->json([
//                 'data'      => 'data berhasil disimpan'
//             ], 200);
//         } catch (\Throwable $th) {
//             return response()->json('data gagal disimpan', 500);
//         }
//     }

