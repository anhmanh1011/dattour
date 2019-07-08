<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTypeRoomAmenities2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_type_room_amenities', function($table)
        {
            $table->primary(['room_id']);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_type_room_amenities', function($table)
        {
            $table->dropPrimary(['room_id']);
        });
    }
}
