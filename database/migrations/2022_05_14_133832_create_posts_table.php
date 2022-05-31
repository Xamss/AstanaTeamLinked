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
            $table->id();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->integer('age');
            $table->text('profession');
            $table->text('experience');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });

        Schema::table('posts', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
