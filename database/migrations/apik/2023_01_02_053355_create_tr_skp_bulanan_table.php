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
        Schema::create('tr_skp_bulanan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('skpb_id', true);
            $table->integer('skpt_id');
            $table->integer('skpb_bulan');
            $table->integer('skpb_kuantitas');
            $table->integer('skpb_biaya');
            $table->integer('skpb_kualitas');
            $table->integer('skpb_real_kuantitas');
            $table->integer('skpb_real_biaya');
            $table->integer('skpb_real_kualitas');
            $table->integer('skpb_status');
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active');
            $table->integer('skpb_nilai');
            $table->integer('skpb_hitung');
            $table->integer('pegawai_id__');
            $table->integer('skpb_tahun__');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_skp_bulanan');
    }
};
