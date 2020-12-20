<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->date('dob');
            $table->string('citizenship_no');
            $table->string('mobile');
            $table->string('phone');
            $table->string('t_street');
            $table->string('t_wardno');
            $table->string('t_wardname')->nullable;
            $table->string('t_municipality');
            $table->string('t_disctrict');
            $table->string('t_state');
            $table->string('t_nation')->default("Nepal");
            $table->string('t_postal');
            $table->string('p_street');
            $table->string('p_wardno');
            $table->string('p_wardname')->nullable;
            $table->string('p_municipality');
            $table->string('p_disctrict');
            $table->string('p_state');
            $table->string('p_nation')->default("Nepal");
            $table->string('p_postal');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('userinfos');
    }
}
