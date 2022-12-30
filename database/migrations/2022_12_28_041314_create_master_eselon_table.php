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
        Schema::create('master_eselon', function (Blueprint $table) {
            $table->comment('');
            $table->char('kd_eselon', 2)->default('00')->index('kd_eselon');
            $table->string('nama_eselon', 30)->nullable()->index('nama_eselon');
            $table->integer('tunjangan_eselon')->nullable();
            $table->integer('id_eselon', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_eselon');
    }
};
