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
        Schema::create('master_satuan_organisasi', function (Blueprint $table) {
            $table->comment('');
            $table->string('kd_instansi', 15)->default('');
            $table->string('kd_organisasi', 15)->default('')->index('kd_organisasi');
            $table->string('kd_satuan_organisasi', 15)->default('')->index('idx_kd_satuan_organisasi');
            $table->string('kode_lama', 12);
            $table->string('nama_satuan_organisasi', 250)->default('')->index('nama_satuan_organisasi');
            $table->integer('id_so', true);
            $table->dateTime('create_date');
            $table->string('create_op', 20);
            $table->dateTime('update_date');
            $table->string('update_op', 20);
            $table->string('tahun', 4)->index('tahun');
            $table->string('bulan', 2)->index('bulan');
            $table->integer('status_data')->index('status_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_satuan_organisasi');
    }
};
