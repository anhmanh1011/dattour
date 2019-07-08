<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelTourType extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_tour_type');
    }
    
    public function down()
    {
        Schema::create('web_hotel_tour_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug', 191)->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
