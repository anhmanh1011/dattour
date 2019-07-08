<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderEvent6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->string('event_title')->nullable();
            $table->dropColumn('event_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->dropColumn('event_title');
            $table->integer('event_id')->nullable();
        });
    }
}
