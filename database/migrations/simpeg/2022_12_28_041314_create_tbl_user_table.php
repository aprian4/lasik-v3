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
            $table->integer('level_id')->nullable()->default(0)->index('level_id')->comment('level pengguna aplikasi, 1 = Super Admin, 2 = Admin, 3 = ASN, 4 = OP PD, 5 = OP Mutasi Fungsional, 6 = OP Mutasi Struktural, 7 = OP Mutasi Bangrir, 8 = OP Diklat Fungsional, 9 = OP Diklat Struktural, 10 = OP Diklat Rembang, 11 = OP Datin, 12 = OP Pembinaan, 13 = OP Pengadaan ');
            $table->string('email', 50)->nullable()->index('email');
            $table->string('hp', 20)->nullable();
            $table->string('username', 30)->unique('username');
            $table->string('password', 600);
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
