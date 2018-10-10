<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_fullname');
            $table->string('user_birthday');
            $table->string('user_mobiphone');
            $table->string('user_homephone');
            $table->string('user_officephone');
            $table->string('user_email')->unique();
            $table->string('user_address');
            $table->string('user_job');
            $table->string('user_roles');
            $table->integer('user_permission');   
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
