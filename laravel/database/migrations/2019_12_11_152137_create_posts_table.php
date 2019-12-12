<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('picture_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('title');
            $table->set('sizes', ['XS','S','M','L','XL','XXL'])->nullable();
            $table->mediumText('description');
            $table->string('price');
            $table->boolean('soldes');
            $table->boolean('visibility');
            $table->string('keyProduct', 16)->unique()->nullable();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('posts');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
