<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderEvent2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->renameColumn('event_id', 'title_event');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->renameColumn('title_event', 'event_id');
        });
    }
}
