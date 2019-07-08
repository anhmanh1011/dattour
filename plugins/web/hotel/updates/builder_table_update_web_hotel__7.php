<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel7 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('location', 'locationdetail');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('locationdetail', 'location');
        });
    }
}
