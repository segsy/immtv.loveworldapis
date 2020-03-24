<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('thumbnail');
            $table->integer('status')->unsigned();
            $table->integer('position')->unsigned();
            $table->string('stringID')->nullable();
            $table->enum('premium')->default('0','1');
            $table->string('urlprefix')->default('http://d3c5pcohbexzc4.cloudfront.net/category/thumb/');
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
        Schema::dropIfExists('tbl_category');
    }
}
