<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderSouvenir2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_souvenir', function($table)
        {
            $table->renameColumn('souvenir_id', 'souvenir_title');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_souvenir', function($table)
        {
            $table->renameColumn('souvenir_title', 'souvenir_id');
        });
    }
}
