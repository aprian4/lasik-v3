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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('table_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('jenis')->nullable();
            $table->text('nama')->nullable();
            $table->timestamp('tanggal_upload')->nullable()->useCurrent();
            $table->text('path')->nullable();
            $table->string('kode_syarat', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumen');
    }
};
