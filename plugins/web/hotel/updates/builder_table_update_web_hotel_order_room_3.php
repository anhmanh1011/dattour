<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->integer('status_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('status_id');
        });
    }
}
