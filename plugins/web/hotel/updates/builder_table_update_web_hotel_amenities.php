<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelAmenities extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->text('icon')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->dropColumn('icon');
        });
    }
}
