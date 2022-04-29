<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_master', function (Blueprint $table) {
            $table->id();
            $table->string('room_catagory',50);
            $table->string('room_size',50);
            $table->integer('per_rate');
            $table->string('room_photo',200);
            $table->integer('beds_count');
            $table->string('free_wifi',15);
            $table->string('shower_bathtub',15);
            $table->integer('postby');
            $table->integer('status');
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
        Schema::dropIfExists('room_master');
    }
}
