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
        Schema::connection('mysql2')->create('kepangkatan', function (Blueprint $table) {
            $table->id();
            $table->char('nomor_sk')->primary();
            $table->date('tanggal_sk');
            $table->string('golongan');
            $table->string('pangkat');
            $table->date('tmt');
            $table->string('jenis_kp');
            $table->string('keterangan');
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
        Schema::connection('mysql2')->dropIfExists('kepangkatan');
    }
};
