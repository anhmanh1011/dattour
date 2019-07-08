<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelTourType3 extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_tour_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->boolean('active')->nullable()->default(0);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_tour_type');
    }
}
