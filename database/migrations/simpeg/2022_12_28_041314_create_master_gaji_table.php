<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_gaji', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('pangkat_gol', 100);
            $table->char('kd_golongan', 2);
            $table->integer('masa_kerja');
            $table->double('gaji')->unsigned();
            $table->string('peraturan', 50);
            $table->integer('tahun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_gaji');
    }
};
