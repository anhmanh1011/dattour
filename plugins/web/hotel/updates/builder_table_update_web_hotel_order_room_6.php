<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->string('title_room', 10)->nullable();
            $table->dropColumn('room_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('title_room');
            $table->integer('room_id')->nullable();
        });
    }
}
