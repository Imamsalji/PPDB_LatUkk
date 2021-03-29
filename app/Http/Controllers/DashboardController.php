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
        $this->_validasi($request);
        dd($request->all());
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

    public function _validasi(Request $request)
    {
        $validation = $request->validate(
            [
                'nis' => 'required',
                'nisn' => 'required',
                'nama' => 'required',
                'jk' => 'required',
                'temp_lahir1' => 'required',
                'tgl_lahir1' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'asal_sekolah' => 'required',
                'Alamat_Sekolah' => 'required',
                'no_skhun' => 'required',
                'no_peserta' => 'required',
                'nm_ibu' => 'required',
                'tmpt_lahir2' => 'required',
                'tgl_lahir2' => 'required',
                'terakhir1' => 'required',
                'pekerjaan1' => 'required',
                'nm_ayah' => 'required',
                'tmpt_lahir3' => 'required',
                'tgl_lahir3' => 'required',
                'terakhir2' => 'required',
                'pekerjaan2' => 'required',
            ],
            [
                'nis.required' => 'Nis Wajib diisi',
                'nisn.required' => 'NISN Wajib diisi',
                'nama.required' => 'Nama Wajib diisi',
                'jk.required' => 'Jenis Kelamin Wajib diisi',
                'temp_lahir1.required' => 'Tempat Lahir Wajib diisi',
                'tgl_lahir1.required' => 'Taggal LahirWajib diisi',
                'alamat.required' => 'Alamat Wajib diisi',
                'agama.required' => 'Agama Wajib diisi',
                'asal_sekolah.required' => 'Asal Sekolah Wajib diisi',
                'Alamat_Sekolah.required' => 'Alamat Sekolah Wajib diisi',
                'no_skhun.required' => 'Nomor SKHUN Wajib diisi',
                'no_peserta.required' => 'Nomor Peserta Wajib diisi',
                'nm_ibu.required' => 'Nama Ibu Wajib diisi',
                'tmpt_lahir2.required' => 'Tempat LahirWajib diisi',
                'tgl_lahir2.required' => 'Tanggal Lahir Wajib diisi',
                'terakhir1.required' => 'Pendidikan Terakhir Wajib diisi',
                'pekerjaan1.required' => 'Pekerjaan Ibu Wajib diisi',
                'nm_ayah.required' => 'Nama ayah Wajib diisi',
                'tmpt_lahir3.required' => 'Tempat Lahir Wajib diisi',
                'tgl_lahir3.required' => 'Tanggal Lahir Wajib diisi',
                'terakhir2.required' => 'Pendidikan Terakhir Wajib diisi',
                'pekerjaan2.required' => 'Pekerjaan Wajib diisi',
            ]
        );
    }

}
