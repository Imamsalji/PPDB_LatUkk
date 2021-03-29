<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Student,school,Mother,Father};

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function daftar()
    {
        return view('daftar.pendaftaran');
    }

    public function pendaftaran(Request $request)
    {
        Student::create([
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'temp_lahir' => $request->temp_lahir1,
            'tgl_lahir' => $request->tgl_lahir1,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
        ]);
        school::create([
            'nisn'=>$request->nisn,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat_sekolah' => $request->Alamat_Sekolah,
            'no_skhun' => $request->no_skhun,
            'no_peserta' => $request->no_peserta,
        ]);
        Mother::create([
            'nisn'=>$request->nisn,
            'nm_ibu' => $request->nm_ibu,
            'temp_lahir' => $request->tmpt_lahir2,
            'tgl_lahir' => $request->tgl_lahir2,
            'terakhir' => $request->terakhir1,
            'pekerjaan' => $request->pekerjaan1,
        ]);
        Father::create([
            'nisn'=>$request->nisn,
            'nm_ayah' => $request->nm_ayah,
            'temp_lahir' => $request->tmpt_lahir3,
            'tgl_lahir' => $request->tgl_lahir3,
            'terakhir' => $request->terakhir2,
            'pekerjaan' => $request->pekerjaan2,
        ]);

        Student::where('nisn',$request->nisn)->update([
            'schools_id' => $request->nisn,
            'mothers_id' => $request->nisn,
            'fathers_id' => $request->nisn,
            ]);
        return redirect('/');
    }

}
