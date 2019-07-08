<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTagHotel extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tag_hotel', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('room_id');
            $table->integer('tag_id');
            $table->primary(['room_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tag_hotel');
    }
}
