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
        Schema::create('master_gaji_berkala', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('golongan', 5);
            $table->integer('masa_kerja');
            $table->bigInteger('gaji');
            $table->integer('pp_tahun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_gaji_berkala');
    }
};
