<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTagEvent extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tag_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->smallInteger('tag_id');
            $table->primary(['event_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tag_event');
    }
}
