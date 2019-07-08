<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelRelationTagHotel extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_relation_tag_hotel');
    }
    
    public function down()
    {
        Schema::create('web_hotel_relation_tag_hotel', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('hotel_id');
            $table->integer('tag_id');
            $table->primary(['hotel_id','tag_id']);
        });
    }
}
