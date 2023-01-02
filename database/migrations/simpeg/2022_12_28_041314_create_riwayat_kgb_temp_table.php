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
        Schema::create('riwayat_kgb_temp', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_rkgb', true);
            $table->integer('id_identitas');
            $table->string('nip', 21);
            $table->string('nama', 100);
            $table->string('no_sk', 100);
            $table->date('tgl_sk');
            $table->date('tmt_kgb');
            $table->integer('gaji');
            $table->integer('tahun');
            $table->integer('bulan');
            $table->string('penandatangan', 200);
            $table->integer('status');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable();
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_kgb_temp');
    }
};
