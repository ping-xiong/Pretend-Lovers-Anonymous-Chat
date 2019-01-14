<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_models', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id')->nullable()->comment('用户ID，开启登录就用到');
            $table->string('ip')->comment('连接的IP');
            $table->string('gender')->comment('性别');

            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_models');
    }
}
