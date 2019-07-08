<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelEvent5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_event', function($table)
        {
            $table->dropColumn('date');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_event', function($table)
        {
            $table->date('date');
        });
    }
}
