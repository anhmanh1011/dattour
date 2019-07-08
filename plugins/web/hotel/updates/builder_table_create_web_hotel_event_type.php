<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelEventType extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_event_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('active')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_event_type');
    }
}
