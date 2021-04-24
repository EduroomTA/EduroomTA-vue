<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminsekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('telp');
            $table->string('foto')->nullable();
            $table->string('kelamin');
            $table->longText('alamat');
            $table->rememberToken();
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
        Schema::dropIfExists('adminsekolah');
    }
}
