<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderEvent4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->string('title_event')->nullable();
            $table->dropColumn('event_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->dropColumn('title_event');
            $table->integer('event_id')->nullable();
        });
    }
}
