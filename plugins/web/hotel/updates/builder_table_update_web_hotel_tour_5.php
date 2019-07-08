<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTour5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->renameColumn('max_people', 'date_number');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->renameColumn('date_number', 'max_people');
        });
    }
}
