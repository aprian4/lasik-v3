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
        Schema::create('master_unit_kerja', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_unit_kerja', true);
            $table->string('kd_instansi', 15)->default('');
            $table->string('kd_organisasi', 15)->default('')->index('kd_organisasi');
            $table->string('kd_satuan_organisasi', 15)->default('')->index('kd_satuan_organisasi');
            $table->string('kd_unit_organisasi', 15)->default('')->index('kd_unit_organisasi');
            $table->string('kd_unit_kerja', 15)->default('')->index('idx_kd_unit_kerja');
            $table->string('nama_unit_kerja', 250)->default('')->index('nama_unit_kerja');
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
        Schema::dropIfExists('master_unit_kerja');
    }
};
