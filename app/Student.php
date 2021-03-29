<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nis','nisn','nama','jk','temp_lahir','tgl_lahir','alamat','agama','schools_id','mothers_id','fathers_id'];
    public function schools()
    {
        return $this->belongsTo(school::class,'nisn','nisn');
    }
    public function mothers()
    {
        return $this->belongsTo(Mother::class,'nisn','nisn');
    }
    public function fathers()
    {
        return $this->belongsTo(Father::class,'nisn','nisn');
    }
}
