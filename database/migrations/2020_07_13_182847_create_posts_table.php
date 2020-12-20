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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propertytype_id');
            $table->foreign('propertytype_id')->references('id')->on('propertytypes');
            $table->string('characteristics');
            $table->string('area');
            $table->string('price');
            $table->boolean('negotiation')->default('0');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->datetime('published-date');
            $table->datetime('expiry-date');
            $table->boolean('status');
            $table->boolean('sold');
            $table->integer('longitude');
            $table->integer('latitude');
            $table->string('top-view')->nullable();
            $table->string('back-view')->nullable();
            $table->string('side-view')->nullable();
            $table->string('front-view');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
