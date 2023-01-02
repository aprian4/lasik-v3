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
        Schema::create('master_instansi', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_instansi', true);
            $table->string('kd_instansi', 15)->default('')->index('kd_instansi');
            $table->string('nama_instansi', 250)->default('');

            $table->index(['kd_instansi'], 'idx_kd_instansi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_instansi');
    }
};
