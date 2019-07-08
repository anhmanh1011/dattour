<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour9 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->integer('children')->nullable();
            $table->integer('baby')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->dropColumn('children');
            $table->dropColumn('baby');
        });
    }
}
