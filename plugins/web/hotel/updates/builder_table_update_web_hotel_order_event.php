<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderEvent extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->renameColumn('danhxung', 'content');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_event', function($table)
        {
            $table->renameColumn('content', 'danhxung');
        });
    }
}
