<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->dropColumn('first_name_receive');
            $table->dropColumn('name_receive');
            $table->dropColumn('phone_receive');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->string('first_name_receive', 191)->nullable();
            $table->string('name_receive', 191)->nullable();
            $table->string('phone_receive', 191)->nullable();
        });
    }
}
