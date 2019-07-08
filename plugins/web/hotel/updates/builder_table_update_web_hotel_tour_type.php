<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTourType extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->string('name')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
