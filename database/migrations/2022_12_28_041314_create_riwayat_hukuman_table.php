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
        Schema::create('riwayat_hukuman', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_hukuman', true);
            $table->unsignedInteger('id_identitas')->default(0);
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->date('selesai')->nullable();
            $table->string('update_op', 20)->nullable();
            $table->string('no_sk', 40)->nullable();
            $table->date('tmt_sk')->nullable();
            $table->date('tmt_hukuman')->nullable();
            $table->date('masa_hukuman')->nullable();
            $table->date('akhir_hukuman')->nullable();
            $table->text('no_pp')->nullable();
            $table->text('alasan_hukuman')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('jenis_hukuman', 200)->nullable();
            $table->string('penjabat', 200)->nullable();
            $table->text('sk_path')->nullable();
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
        Schema::dropIfExists('riwayat_hukuman');
    }
};
