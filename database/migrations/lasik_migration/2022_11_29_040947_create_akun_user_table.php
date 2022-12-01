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
        Schema::create('akun_user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->integer('pegawai_id')->length(11)->unsigned()->unique();
            $table->string('username', 20);
            $table->string('password', 255);
            $table->string('finger', 255)->nullable();
            $table->string('wajah', 255)->nullable();
            $table->string('foto', 255)->nullable();
            $table->tinyInteger('in_active')->length(1)->unsigned();
            $table->date('waktu_in_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_user');
    }
};
