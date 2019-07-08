<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelIg extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_ig');
    }
    
    public function down()
    {
        Schema::create('web_hotel_ig', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
        });
    }
}
