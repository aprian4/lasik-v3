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
        Schema::create('kenaikan_gaji', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_kenaikan', true);
            $table->string('sk', 100);
            $table->integer('id_identitas');
            $table->date('create_dete');
            $table->integer('create_op');
            $table->date('update_date');
            $table->integer('update_op');
            $table->date('tmt');
            $table->integer('tahun');
            $table->integer('bulan');
            $table->integer('gaji');
            $table->date('tmt_baru')->nullable();
            $table->integer('gaji_baru')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('sk_baru', 100)->nullable();
            $table->date('tgl_sk_baru')->nullable();
            $table->integer('tahun_baru')->nullable();
            $table->integer('bulan_baru')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('dokumen');
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
        Schema::dropIfExists('kenaikan_gaji');
    }
};
