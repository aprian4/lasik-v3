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
        Schema::create('master_jenis_jabatan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_jenis_jabatan', true);
            $table->integer('kd_jenis_jabatan')->index('kd_jenis_jabatan');
            $table->string('nama_jabatan', 50)->index('nama_jabatan');
            $table->string('kelompok_jabatan', 50)->index('kelompok_jabatan');
            $table->integer('id_jenis_jabatan_sapk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_jenis_jabatan');
    }
};
