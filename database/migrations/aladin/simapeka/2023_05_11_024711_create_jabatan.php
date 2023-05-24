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
        Schema::connection('mysql2')->create('jabatan', function (Blueprint $table) {
            $table->id();
            $table->char('kode_jabatan')->primary();
            $table->string('nama_jabatan');
            $table->date('tmt_jabatan');
            $table->string('keterangan_jabatan');
            $table->string('perangkat_daerah');
            $table->string('dokumen_jabatan');
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
        Schema::connection('mysql2')->dropIfExists('jabatan');
    }
};
