<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelRelationTourType extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_relation_tour_type');
    }
    
    public function down()
    {
        Schema::create('web_hotel_relation_tour_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('tour_id');
            $table->smallInteger('tour_type_id');
            $table->primary(['tour_id','tour_type_id']);
        });
    }
}