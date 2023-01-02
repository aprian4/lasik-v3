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
        Schema::create('master_aktifitas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('aktifitas_id', true);
            $table->integer('kelompok_id');
            $table->integer('dinas_id');
            $table->string('aktifitas_kode', 20);
            $table->string('aktifitas_nama', 200);
            $table->string('aktifitas_output', 50);
            $table->integer('aktifitas_waktu');
            $table->integer('aktifitas_status');
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_aktifitas');
    }
};
