<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour11 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->renameColumn('tour_id', 'tour_title');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->renameColumn('tour_title', 'tour_id');
        });
    }
}
