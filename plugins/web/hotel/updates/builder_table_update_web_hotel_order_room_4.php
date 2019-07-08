<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('first_name');
            $table->dropColumn('first_name_receiver');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->string('first_name', 191);
            $table->string('first_name_receiver', 191)->nullable();
        });
    }
}
