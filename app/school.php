<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $fillable = ['nisn','asal_sekolah','alamat_sekolah','no_skhun','no_peserta'];
    public function students()
    {
        return $this->hasOne(Student::class,'nisn','nisn');
    }
}
