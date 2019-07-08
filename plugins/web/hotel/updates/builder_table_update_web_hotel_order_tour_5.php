<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->integer('status_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->integer('status_id')->nullable(false)->change();
        });
    }
}
