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
        Schema::create('master_lokasi', function (Blueprint $table) {
            $table->comment('untuk menandakan lokasi pegawai');
            $table->string('id_lokasi')->default('')->primary();
            $table->integer('propinsi');
            $table->string('nama_propinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->dateTime('create_date');
            $table->string('create_op', 20);
            $table->dateTime('update_date');
            $table->string('update_op', 20);
            $table->integer('status_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_lokasi');
    }
};
