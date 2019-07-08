<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelEvent2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_event', function($table)
        {
            $table->renameColumn('percent', 'discount');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_event', function($table)
        {
            $table->renameColumn('discount', 'percent');
        });
    }
}
