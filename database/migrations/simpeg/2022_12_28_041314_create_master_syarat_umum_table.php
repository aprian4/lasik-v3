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
        Schema::create('master_syarat_umum', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_syarat', true);
            $table->string('kode_syarat', 6);
            $table->text('nama_syarat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_syarat_umum');
    }
};
