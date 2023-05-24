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
        Schema::connection('mysql2')->create('diklat_jabatan', function (Blueprint $table) {
            $table->id();
            $table->char('kode_jenis_pelatihan')->primary();
            $table->string('nama_pelatihan');
            $table->string('lembaga_pelaksana');
            $table->date('tanggal');
            $table->integer('jumlah_jam');
            $table->string('dokumen');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('kode_jabatan')->references('kode_jabatan')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('diklat_jabatan');
    }
};
