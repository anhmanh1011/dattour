<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->dropColumn('id_tour');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->integer('id_tour')->nullable();
        });
    }
}
