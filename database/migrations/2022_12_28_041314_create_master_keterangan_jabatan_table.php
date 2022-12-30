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
        Schema::create('master_keterangan_jabatan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_keterangan_jabatan', true);
            $table->string('nama_keterangan_jabatan', 200)->index('nama_keterangan_jabatan');
            $table->dateTime('create_date');
            $table->string('create_op', 20);
            $table->dateTime('update_date');
            $table->string('update_op', 20);
            $table->integer('status_data')->index('status_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_keterangan_jabatan');
    }
};
