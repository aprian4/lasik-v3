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
        Schema::create('master_lembagapendidikan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_lembagapendidikan', true);
            $table->string('nama_lembaga', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->dateTime('create_date')->nullable();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_op', 20)->nullable();
            $table->integer('status_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_lembagapendidikan');
    }
};
