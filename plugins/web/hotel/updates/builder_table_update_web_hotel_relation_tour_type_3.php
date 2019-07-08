<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTourType3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_tour_type', function($table)
        {
            $table->dropPrimary(['tour_id','type_id']);
            $table->renameColumn('type_id', 'tour_type_id');
            $table->primary(['tour_id','tour_type_id']);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_tour_type', function($table)
        {
            $table->dropPrimary(['tour_id','tour_type_id']);
            $table->renameColumn('tour_type_id', 'type_id');
            $table->primary(['tour_id','type_id']);
        });
    }
}
