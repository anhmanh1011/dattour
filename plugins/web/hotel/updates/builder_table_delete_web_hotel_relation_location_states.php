<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelRelationLocationStates extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_relation_location_states');
    }
    
    public function down()
    {
        Schema::create('web_hotel_relation_location_states', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('location_id');
            $table->integer('states_id');
            $table->primary(['location_id','states_id']);
        });
    }
}
