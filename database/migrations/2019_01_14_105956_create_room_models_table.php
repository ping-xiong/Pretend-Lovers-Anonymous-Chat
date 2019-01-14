<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_id')->comment('房间号，系统分配');
            $table->unsignedInteger('boy_user_id')->nullable()->comment('男生编号，开启登录就用到');
            $table->string('boy_ip')->comment('男生IP');
            $table->unsignedInteger('girl_user_id')->nullable()->comment('女生编号，开启登录就用到');
            $table->string('girl_ip')->comment('女生IP');
            $table->unsignedInteger('time_limit')->comment('房间有效时间，秒数')->default(0);
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
        Schema::dropIfExists('room_models');
    }
}
