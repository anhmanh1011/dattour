<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom7 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dateTime('check_in')->nullable();
            $table->dateTime('check_out')->nullable();
            $table->integer('number_rooms')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('check_in');
            $table->dropColumn('check_out');
            $table->dropColumn('number_rooms');
            $table->dropColumn('adults');
            $table->dropColumn('children');
        });
    }
}
