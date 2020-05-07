<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemester1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester1s', function (Blueprint $table) {
            $table->id();
            $table->string('kode_matpel');
            $table->string('nis');
            $table->float('uts')->unsigned()->nullable();
            $table->float('uas')->unsigned()->nullable();
            $table->float('tugas')->unsigned()->nullable();
            $table->float('rata_matpel')->unsigned()->nullable();
            $table->string('predikat')->unsigned()->nullable();
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
        Schema::dropIfExists('semester1s');
    }
}
