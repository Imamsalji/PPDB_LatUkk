<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    protected $fillable = ['nisn','nm_ayah','temp_lahir','tgl_lahir','terakhir','pekerjaan'];
    public function students()
    {
        return $this->hasOne(Student::class,'nisn','nisn');
    }
}
