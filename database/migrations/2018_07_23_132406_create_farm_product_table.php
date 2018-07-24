<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farm_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farm_id')->unsigned();
            $table->integer('product_id')->unsigned();


            $table->foreign('farm_id', 'foreign_farm_product')
                ->references('id')
                ->on('farms')
                ->onDelete('cascade');

            $table->foreign('product_id', 'foreign_product_farm')
                ->references('id')
                ->on('product')
                ->onDelete('cascade');

            $table->unique(['farm_id', 'product_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farm_product');
    }
}
