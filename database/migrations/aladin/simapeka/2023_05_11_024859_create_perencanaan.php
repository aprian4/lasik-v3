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
        Schema::connection('mysql2')->create('perencanaan', function (Blueprint $table) {
            $table->id();
            $table->char('kode_perencanaan')->primary();
            $table->string('jenis_pengembangan_kompetensi');
            $table->decimal('jumlah_anggaran');
            $table->string('nama_lembaga');
            $table->date('tanggal_perencanaan');
            $table->string('keterangan_jp');
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
        Schema::connection('mysql2')->dropIfExists('perencanaan');
    }
};
