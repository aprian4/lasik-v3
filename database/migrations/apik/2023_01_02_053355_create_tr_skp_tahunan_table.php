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
        Schema::create('tr_skp_tahunan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('skpt_id', true);
            $table->integer('pegawai_id');
            $table->integer('skpt_tahun');
            $table->string('skpt_kegiatan', 200);
            $table->integer('skpt_waktu');
            $table->integer('skpt_kuantitas');
            $table->integer('skpt_kualitas');
            $table->integer('skpt_kredit');
            $table->integer('skpt_biaya');
            $table->integer('skpt_status');
            $table->timestamp('created_date')->nullable()->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active');
            $table->integer('skpt_output');
            $table->integer('is_missing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_skp_tahunan');
    }
};
