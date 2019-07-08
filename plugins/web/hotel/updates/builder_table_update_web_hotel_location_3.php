<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelLocation3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->smallInteger('state');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->dropColumn('state');
        });
    }
}
