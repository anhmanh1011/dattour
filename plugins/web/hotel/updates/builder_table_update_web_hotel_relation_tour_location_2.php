<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTourLocation2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_tour_location', function($table)
        {
            $table->dropPrimary(['tour_id','locations_id']);
            $table->renameColumn('locations_id', 'id');
            $table->primary(['tour_id','id']);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_tour_location', function($table)
        {
            $table->dropPrimary(['tour_id','id']);
            $table->renameColumn('id', 'locations_id');
            $table->primary(['tour_id','locations_id']);
        });
    }
}
