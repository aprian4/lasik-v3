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
        Schema::create('riwayat_izincerai', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_izin', true);
            $table->unsignedInteger('id_identitas')->default(0);
            $table->date('tanggal')->nullable()->useCurrent();
            $table->string('no_surat', 20)->nullable();
            $table->string('atasan', 50)->nullable();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->text('no_surat_ket')->nullable();
            $table->date('tanggal_ket')->nullable();
            $table->text('no_akta')->nullable();
            $table->date('tanggal_akta')->nullable();
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
        Schema::dropIfExists('riwayat_izincerai');
    }
};
