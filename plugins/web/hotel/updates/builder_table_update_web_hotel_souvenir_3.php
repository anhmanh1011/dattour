<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelSouvenir3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_souvenir', function($table)
        {
            $table->renameColumn('percent', 'discount');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_souvenir', function($table)
        {
            $table->renameColumn('discount', 'percent');
        });
    }
}
