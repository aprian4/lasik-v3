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
        Schema::create('master_instansi_pelaksana', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_ip');
            $table->string('nama', 50);
            $table->string('kode', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_instansi_pelaksana');
    }
};
