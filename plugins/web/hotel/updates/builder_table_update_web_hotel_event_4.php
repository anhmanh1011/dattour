<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelEvent4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_event', function($table)
        {
            $table->date('start_day')->nullable();
            $table->date('end_day');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_event', function($table)
        {
            $table->dropColumn('start_day');
            $table->dropColumn('end_day');
        });
    }
}
