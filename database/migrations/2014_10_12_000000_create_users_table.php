<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\User;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('level');//1 admin, 2 user, 3 petani  
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User;
        $user->name = 'Arief Setya';
        $user->email = 'emailanenih@gmail.com';
        $user->password = 'windows10';
        $user->level = 1;
        $user->save();
        $user = new User;
        $user->name = 'Achmad Fauzi';
        $user->email = 'achmadfauzi@gmail.com';
        $user->password = '2121';
        $user->level = 1;
        $user->save();
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
