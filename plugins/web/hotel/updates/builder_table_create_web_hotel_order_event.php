<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelOrderEvent extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_order_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_order_event');
    }
}
