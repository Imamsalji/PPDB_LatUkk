<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->foreignId('nisn')->unique();
            $table->string('nama');
            $table->enum('jk', ['laki-laki', 'perempuan'])->nullable();
            $table->string('temp_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('agama');
            $table->boolean('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
