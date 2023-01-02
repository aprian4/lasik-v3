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
        Schema::create('tr_aktifitas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tr_aktifitas_id', true);
            $table->integer('pegawai_id');
            $table->integer('aktifitas_id');
            $table->date('tr_aktifitas_tanggal');
            $table->integer('tr_aktifitas_volume');
            $table->time('tr_aktifitas_mulai');
            $table->time('tr_aktifitas_selesai');
            $table->string('tr_aktifitas_keterangan', 200);
            $table->integer('tr_aktifitas_status');
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active');
            $table->string('tr_aktifitas_dokumen', 500);
            $table->integer('tr_valid_aa');
            $table->integer('tr_valid_al');
            $table->integer('tr_valid_by_aa');
            $table->integer('tr_valid_by_al');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_aktifitas');
    }
};
