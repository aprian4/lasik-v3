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
        Schema::create('master_status_pegawai', function (Blueprint $table) {
            $table->comment('');
            $table->char('kd_status', 3)->nullable();
            $table->string('nama_status', 30)->nullable();
            $table->integer('id_status', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_status_pegawai');
    }
};
