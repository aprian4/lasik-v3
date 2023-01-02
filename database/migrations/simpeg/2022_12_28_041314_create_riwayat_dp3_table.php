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
        Schema::create('riwayat_dp3', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_dp3', true);
            $table->float('nilai_total', 10, 0)->nullable()->default(0);
            $table->float('nilai_rata', 10, 0)->nullable()->default(0);
            $table->integer('tahun')->nullable();
            $table->unsignedInteger('id_identitas')->default(0);
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('penjabat', 100)->nullable();
            $table->string('atasan_penjabat', 100)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->default(0)->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
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
        Schema::dropIfExists('riwayat_dp3');
    }
};
