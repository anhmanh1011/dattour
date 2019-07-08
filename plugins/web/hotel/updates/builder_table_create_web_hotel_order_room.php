<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelOrderRoom extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_order_room', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('name');
            $table->string('danhxung')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('first_name_receiver')->nullable();
            $table->string('name_receiver')->nullable();
            $table->string('phone_receiver')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_order_room');
    }
}
