<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('farm_id')->unsigned();


            $table->increments('id');
            $table->timestamps();

            $table->foreign('farm_id', 'foreign_farm_user')
                ->references('id')
                ->on('farms')
                ->onDelete('cascade');

            $table->foreign('user_id', 'foreign_user_farm')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unique(['user_id', 'farm_id']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farms_users');
    }
}
