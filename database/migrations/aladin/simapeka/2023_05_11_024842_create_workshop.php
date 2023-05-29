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
        Schema::connection('mysql2')->create('workshop', function (Blueprint $table) {
            $table->id();
            $table->char('kode_kegiatan')->primary();
            $table->string('nama_kegiatan');
            $table->string('penyelenggara');
            $table->date('tanggal');
            $table->integer('jam');
            $table->string('nomor_sertifikat');
            $table->string('dokumen');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('nip_pegawai')->references('nip')->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('workshop');
    }
};
