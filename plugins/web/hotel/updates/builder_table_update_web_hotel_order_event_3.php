<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderEvent3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->integer('event_id')->nullable();
            $table->dropColumn('title_event');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->dropColumn('event_id');
            $table->string('title_event', 191)->nullable();
        });
    }
}
