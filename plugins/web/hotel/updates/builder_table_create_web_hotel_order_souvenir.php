<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelOrderSouvenir extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_order_souvenir', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_order_souvenir');
    }
}