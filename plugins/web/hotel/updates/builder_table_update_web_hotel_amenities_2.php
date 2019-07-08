<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelAmenities2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->integer('price_new')->nullable();
            $table->integer('discount')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->dropColumn('price_new');
            $table->dropColumn('discount');
        });
    }
}
