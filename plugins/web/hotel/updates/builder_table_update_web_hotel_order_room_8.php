<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom8 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->integer('user_created')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('user_created');
        });
    }
}
