<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationHotelRoom extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_hotel_room', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->primary(['hotel_id','room_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_hotel_room');
    }
}
