<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTypeRoom6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->integer('hotel_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->dropColumn('hotel_id');
        });
    }
}
