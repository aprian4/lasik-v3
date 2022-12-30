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
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('nama', 50);
            $table->string('skpd', 200)->nullable();
            $table->integer('level_id')->nullable()->default(0)->index('level_id')->comment('level pengguna aplikasi, 0 = administrator; 1 =verifikator pusat, 2 = administrator opd, 3 =user, 4=administrator bidang, 5=umpeg skpd ');
            $table->string('email', 50)->nullable()->index('email');
            $table->string('hp', 20)->nullable();
            $table->string('username', 30)->unique('username');
            $table->string('password', 60);
            $table->boolean('def_passwd')->unsigned()->default(true);
            $table->boolean('hp_verified')->unsigned()->default(false);
            $table->boolean('email_verified')->unsigned()->default(false);
            $table->boolean('rec_active')->unsigned()->default(true)->index('rec_active');
            $table->timestamp('update_tgl')->useCurrentOnUpdate()->nullable()->useCurrent()->index('update_tgl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user');
    }
};
