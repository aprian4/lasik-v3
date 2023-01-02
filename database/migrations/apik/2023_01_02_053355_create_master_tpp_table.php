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
        Schema::create('master_tpp', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tpp_id', true);
            $table->integer('pegawai_id');
            $table->string('tpp_beban_kerja', 200);
            $table->string('tpp_objective', 200);
            $table->integer('tahun');
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active');
            $table->integer('bulan_akhir');
            $table->integer('tahun_akhir');
            $table->integer('bulan_awal');
            $table->integer('id_organisasi');
            $table->integer('is_current');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_tpp');
    }
};
