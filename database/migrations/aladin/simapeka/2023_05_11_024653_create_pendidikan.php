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
        Schema::connection('mysql2')->create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->char('kode_pendidikan')->primary();
            $table->string('jenis_pendidikan');
            $table->string('nama_lembaga');
            $table->string('jurusan');
            $table->date('tanggal_ijazah');
            $table->integer('tahun_lulus');
            $table->float('ipk');
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
        Schema::connection('mysql2')->dropIfExists('pendidikan');
    }
};
