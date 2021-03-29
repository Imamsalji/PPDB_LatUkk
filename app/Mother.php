<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $fillable = ['nisn','nm_ibu','temp_lahir','tgl_lahir','terakhir','pekerjaan'];
    public function students()
    {
        return $this->hasOne(Student::class,'nisn','nisn');
    }
}
