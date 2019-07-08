<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelStatus extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('color')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_status');
    }
}
