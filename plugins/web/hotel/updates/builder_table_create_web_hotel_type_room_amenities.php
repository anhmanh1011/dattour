<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelTypeRoomAmenities extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_type_room_amenities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('room_id');
            $table->integer('amenities');
            $table->primary(['room_id','amenities']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_type_room_amenities');
    }
}
