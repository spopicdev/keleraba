<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('product_id')->unsigned();

            /*
             * Add Foreign/Unique/Index
             */
            $table->foreign('category_id', 'foreign_category_product')
                ->references('id')
                ->on('category')
                ->onDelete('cascade');

            $table->foreign('product_id', 'foreign_product_category')
                ->references('id')
                ->on('product')
                ->onDelete('cascade');

            $table->unique(['category_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
