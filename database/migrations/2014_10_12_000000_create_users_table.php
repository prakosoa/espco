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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('level')->nullable();
            $table->string('password');
            $table->string('nickname')->nullable();
            $table->string('phone')->nullable();
            $table->text('steam')->nullable();
            $table->string('rank')->nullable();
            $table->unsignedInteger('games_id')->nullable();
            $table->decimal('fee')->nullable();
            $table->text('about')->nullable();
            $table->text('photo')->nullable();
            $table->index('games_id');



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
