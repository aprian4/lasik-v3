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
        Schema::create('master_golongan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_golongan', true);
            $table->char('kd_golongan', 2)->nullable();
            $table->string('nama_golongan', 8)->nullable();
            $table->string('kepangkatan', 23)->nullable();
            $table->integer('id_golongan_sapk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_golongan');
    }
};
