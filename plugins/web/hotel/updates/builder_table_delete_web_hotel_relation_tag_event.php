<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelRelationTagEvent extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_relation_tag_event');
    }
    
    public function down()
    {
        Schema::create('web_hotel_relation_tag_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('tag_id');
            $table->primary(['event_id','tag_id']);
        });
    }
}
