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
        Schema::create('master_negara', function (Blueprint $table) {
            $table->comment('');
            $table->char('kd_negara', 3)->nullable();
            $table->string('nama_negara', 32)->nullable();
            $table->integer('id_negara', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_negara');
    }
};
