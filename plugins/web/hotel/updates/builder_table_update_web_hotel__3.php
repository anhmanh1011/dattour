<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('locations_id', 'location_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('location_id', 'locations_id');
        });
    }
}
