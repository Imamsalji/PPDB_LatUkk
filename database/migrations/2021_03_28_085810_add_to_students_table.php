<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('schools_id')->references('nisn')->on('schools')->onDelete('cascade');
            $table->foreignId('mothers_id')->references('nisn')->on('mothers')->onDelete('cascade');
            $table->foreignId('fathers_id')->references('nisn')->on('fathers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('schools_id');
            $table->dropColumn('mothers_id');
            $table->dropColumn('fathers_id');
        });
    }
}
