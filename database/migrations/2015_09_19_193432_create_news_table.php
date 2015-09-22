<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug')->nullable();
                $table->string('thumbnail');
                $table->string('title');
                $table->string('short_text');
                $table->text('text');
                $table->integer('gallery_id');
                $table->boolean('pin', false);
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
        Schema::drop('news');
    }
}
