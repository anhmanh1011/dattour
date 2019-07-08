<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationHotelLocation extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_hotel_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('hotel_id');
            $table->integer('location_id');
            $table->primary(['hotel_id','location_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_hotel_location');
    }
}
