<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTagHotel extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_tag_hotel', function($table)
        {
            $table->dropPrimary(['room_id','tag_id']);
            $table->renameColumn('room_id', 'hotel_id');
            $table->primary(['hotel_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_tag_hotel', function($table)
        {
            $table->dropPrimary(['hotel_id','tag_id']);
            $table->renameColumn('hotel_id', 'room_id');
            $table->primary(['room_id','tag_id']);
        });
    }
}
