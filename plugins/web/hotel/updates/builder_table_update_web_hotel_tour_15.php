<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTour15 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->renameColumn('star_rate', 'star_rate5');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->renameColumn('star_rate5', 'star_rate');
        });
    }
}
