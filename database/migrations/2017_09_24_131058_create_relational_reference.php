<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationalReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('games_id')->references('id')->on('games');
        });
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('coach_id')->references('id')->on('users');
            $table->foreign('order_schedules_id')->references('id')->on('order_schedules');
        });
        Schema::table('order_schedules', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users');
        });
        Schema::table('checkouts', function (Blueprint $table) {
            $table->foreign('order_schedules_id')->references('id')->on('order_schedules');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_games_id_foreign');
        });
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign('schedules_coach_id_foreign');
            $table->dropForeign('schedules_order_schedules_id_foreign');
        });
        Schema::table('order_schedules', function (Blueprint $table) {
            $table->dropForeign('order_schedules_users_id_foreign');
        });
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropForeign('checkouts_order_schedules_id_foreign');
        });
    }
}
