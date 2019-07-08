<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderSouvenir extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_souvenir', function($table)
        {
            $table->renameColumn('danhxung', 'content');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_souvenir', function($table)
        {
            $table->renameColumn('content', 'danhxung');
        });
    }
}
