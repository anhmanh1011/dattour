<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelAmenities4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->integer('star_4')->nullable()->change();
            $table->integer('star_5')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->integer('star_4')->nullable(false)->change();
            $table->integer('star_5')->nullable(false)->change();
        });
    }
}
