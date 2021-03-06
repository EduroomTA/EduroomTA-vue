<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('foto')->nullable();
            // $table->integer('id_sekolah')->unsigned();
            // $table->foreign('id_sekolah')->references('id')->on('sekolah')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
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
        Schema::dropIfExists('guru');
    }
}
