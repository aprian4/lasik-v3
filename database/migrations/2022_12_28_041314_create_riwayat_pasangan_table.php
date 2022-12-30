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
        Schema::create('riwayat_pasangan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_pasangan', true);
            $table->integer('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('nama', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->date('tgl_nikah')->nullable();
            $table->string('pekerjaan', 110)->nullable();
            $table->string('seri_karis', 20)->nullable();
            $table->integer('id_statkawin')->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->string('no_akte_menikah', 100)->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->string('no_akte_meninggal', 100)->nullable();
            $table->date('tanggal_surat_izin_cerai')->nullable();
            $table->string('no_surat_izin', 100)->nullable();
            $table->date('tanggal_ket_cerai')->nullable();
            $table->string('no_ket_cerai', 100)->nullable();
            $table->string('ket_cerai', 100)->nullable();
            $table->date('tanggal_cerai')->nullable();
            $table->string('no_akte_cerai', 100)->nullable();
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
        Schema::dropIfExists('riwayat_pasangan');
    }
};
