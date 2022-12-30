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
        Schema::create('riwayat_seminar', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_seminar', true);
            $table->integer('id_identitas');
            $table->string('kegiatan', 200);
            $table->text('tempat');
            $table->text('penyelenggara');
            $table->integer('jam');
            $table->integer('tahun');
            $table->string('no', 40);
            $table->date('tanggal');
            $table->text('dokumen')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
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
        Schema::dropIfExists('riwayat_seminar');
    }
};
