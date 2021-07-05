<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nik')->nullable();
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->string('email')->unique();
            $table->date('tanggal')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('suhu')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('sakit_tenggorokan')->nullable();
            $table->string('batuk')->nullable();
            $table->string('pilek')->nullable();
            $table->string('sesak_nafas')->nullable();
            $table->string('diare')->nullable();
            $table->string('rasa')->nullable();
            $table->string('penciuman')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
