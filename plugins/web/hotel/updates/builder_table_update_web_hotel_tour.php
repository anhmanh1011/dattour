<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTour extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->dropColumn('location');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->text('location')->nullable();
        });
    }
}
