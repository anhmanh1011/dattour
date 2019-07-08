<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTourHotel extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tour_hotel', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tour_id');
            $table->integer('hotel_id');
            $table->primary(['tour_id','hotel_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tour_hotel');
    }
}
