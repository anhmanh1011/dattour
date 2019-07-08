<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->integer('active_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->dropColumn('active_id');
        });
    }
}
