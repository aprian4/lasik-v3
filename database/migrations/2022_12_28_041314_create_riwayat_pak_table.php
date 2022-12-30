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
        Schema::create('riwayat_pak', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_pak', true);
            $table->string('no_sk', 40);
            $table->date('tgl_sk');
            $table->date('tanggal_mulai_penilaian');
            $table->date('tanggal_akhir_penilaian');
            $table->float('nilai_kredit_utama_baru', 10, 0);
            $table->float('nilai_kredit_penunjang_baru', 10, 0);
            $table->integer('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable();
            $table->string('bulan_mulai_penilaian', 2)->nullable();
            $table->integer('tahun_mulai_penilaian')->nullable();
            $table->string('bulan_selesai_penilaian', 2)->nullable();
            $table->integer('tahun_selesai_penilaian')->nullable();
            $table->float('total_kredit_baru', 10, 0);
            $table->integer('is_pak_pertama')->nullable();
            $table->integer('kd_jabatan')->nullable();
            $table->date('tmt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pak');
    }
};
