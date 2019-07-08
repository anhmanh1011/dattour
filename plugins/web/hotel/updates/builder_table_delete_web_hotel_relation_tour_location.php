<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelRelationTourLocation extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_relation_tour_location');
    }
    
    public function down()
    {
        Schema::create('web_hotel_relation_tour_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tour_id');
            $table->integer('location_id');
            $table->primary(['tour_id','location_id']);
        });
    }
}
