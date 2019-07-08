<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelOrderFB extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_order_f_b', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_order_f_b');
    }
}
