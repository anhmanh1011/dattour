<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTypeRoomAmenities extends Migration
{
    public function up()
    {
        Schema::rename('web_hotel_type_room_amenities', 'web_hotel_relation_type_room_amenities');
    }
    
    public function down()
    {
        Schema::rename('web_hotel_relation_type_room_amenities', 'web_hotel_type_room_amenities');
    }
}
