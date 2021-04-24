<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sekolah');
            $table->string('npsn')->unique();
            $table->string('status');
            $table->string('jenjang');
            $table->string('logo')->nullable();
            // $table->string('prov');
            // $table->string('kab');
            // $table->string('kec');
            $table->string('jalan');
            $table->string('kode');
            // $table->string('id_paket');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('adminsekolah')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('sekolah');
    }
}
