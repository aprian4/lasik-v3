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
        Schema::create('riwayat_izin_belajar', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_ibelajar', true);
            $table->unsignedInteger('id_identitas')->default(0);
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('nota_dinas', 50)->nullable();
            $table->string('sk_tugasbelajar', 100)->nullable();
            $table->integer('tingkat_pendidikan')->nullable();
            $table->string('negara', 100)->nullable();
            $table->text('nama_universitas')->nullable();
            $table->text('jurusan')->nullable();
            $table->text('bidang')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->string('nota_dinas_selesai', 50)->nullable();
            $table->string('sk_tugasbelajar_selesai', 100)->nullable();
            $table->date('tmt_aktif')->nullable();
            $table->text('sponsor')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('hasil')->nullable();
            $table->date('tmt_penyesuaian')->nullable();
            $table->integer('tahun_ijazah')->nullable();
            $table->integer('id_lembaga')->nullable();
            $table->integer('id_jurusan')->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->nullable()->default(0)->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
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
        Schema::dropIfExists('riwayat_izin_belajar');
    }
};
