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
        Schema::create('master_fungsional', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_fungsional', true);
            $table->char('kd_fungsional', 2)->default('00')->index('kd_fungsional');
            $table->string('nama_fungsional', 20)->nullable()->index('nama_fungsional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_fungsional');
    }
};
