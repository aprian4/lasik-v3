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
        Schema::create('master_berita', function (Blueprint $table) {
            $table->comment('');
            $table->integer('berita_id', true);
            $table->date('berita_mulai');
            $table->date('berita_selesai');
            $table->integer('berita_jenis');
            $table->string('berita_judul', 100);
            $table->string('berita_sekilas', 250);
            $table->text('berita_lengkap');
            $table->integer('berita_splash');
            $table->integer('berita_urut');
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_berita');
    }
};
