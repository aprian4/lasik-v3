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
        Schema::create('riwayat_dokter', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_riwayat_dokter', true);
            $table->unsignedInteger('id_identitas')->default(0);
            $table->string('jenis_unit_kesehatan')->nullable();
            $table->string('nama_unit_kesehatan')->nullable();
            $table->string('jenis_dokter')->nullable();
            $table->string('bidang_spesialis')->nullable();
            $table->integer('penanganan_dokter')->nullable();
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('riwayat_dokter');
    }
};
