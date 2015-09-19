<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('thumbnail')->nullable();

            $table->text('description')->nullable();
            $table->text('specs')->nullable();
            $table->text('details')->nullable();
            $table->text('images')->nullable();

            $table->string('tags')->nullable();
            $table->float('price')->nullable();
            $table->string('link')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('product_id')->nullable();
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
        Schema::drop('products');
    }
}
