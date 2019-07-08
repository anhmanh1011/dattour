<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationEventType extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_event_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('event_id');
            $table->smallInteger('type_id');
            $table->primary(['event_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_event_type');
    }
}
