<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('location', 'locations_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('locations_id', 'location');
        });
    }
}
