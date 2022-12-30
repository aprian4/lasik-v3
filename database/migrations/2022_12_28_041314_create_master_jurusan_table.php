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
        Schema::create('master_jurusan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_jurusan', true);
            $table->integer('id_tingkat');
            $table->integer('id_fakultas');
            $table->string('kode_jurusan', 11);
            $table->string('nama_jurusan', 100);
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
        Schema::dropIfExists('master_jurusan');
    }
};
