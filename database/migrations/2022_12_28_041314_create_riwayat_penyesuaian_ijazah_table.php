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
        Schema::create('riwayat_penyesuaian_ijazah', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_rpendidikan', true);
            $table->integer('id_identitas')->nullable();
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->integer('id_jurusan')->nullable();
            $table->integer('id_lembaga')->nullable();
            $table->integer('tahun_ijazah')->nullable();
            $table->text('nama_lembaga')->nullable();
            $table->text('kd_pendidikan')->nullable();
            $table->text('jurusan')->nullable();
            $table->text('kategori')->nullable();
            $table->text('tmt_penyesuaian')->nullable();
            $table->text('no_sertifikat')->nullable();
            $table->date('tgl_sertifikat')->nullable();
            $table->text('penyelenggara')->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_penyesuaian_ijazah');
    }
};
