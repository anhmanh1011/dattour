<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTour12 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->integer('sale');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->dropColumn('sale');
        });
    }
}
