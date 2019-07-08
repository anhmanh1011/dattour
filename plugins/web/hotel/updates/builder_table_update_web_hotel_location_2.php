<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelLocation2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->dropColumn('active');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->boolean('active')->nullable()->default(0);
        });
    }
}
