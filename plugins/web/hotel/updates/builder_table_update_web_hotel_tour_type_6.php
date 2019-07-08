<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTourType6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
