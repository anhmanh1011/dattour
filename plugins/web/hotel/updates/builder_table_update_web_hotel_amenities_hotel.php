<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelAmenitiesHotel extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_amenities_hotel', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_amenities_hotel', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
