<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTourLocation extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_tour_location', function($table)
        {
            $table->dropPrimary(['tour_id','location_id']);
            $table->renameColumn('location_id', 'locations_id');
            $table->primary(['tour_id','locations_id']);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_tour_location', function($table)
        {
            $table->dropPrimary(['tour_id','locations_id']);
            $table->renameColumn('locations_id', 'location_id');
            $table->primary(['tour_id','location_id']);
        });
    }
}
