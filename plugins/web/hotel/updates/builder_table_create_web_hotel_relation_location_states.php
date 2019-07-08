<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationLocationStates extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_location_states', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('location_id')->unsigned();
            $table->smallInteger('states_id')->unsigned();
            $table->primary(['location_id','states_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_location_states');
    }
}
