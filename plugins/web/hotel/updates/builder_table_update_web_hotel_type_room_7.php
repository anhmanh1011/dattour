<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTypeRoom7 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->renameColumn('hotel_id', 'hotels_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->renameColumn('hotels_id', 'hotel_id');
        });
    }
}
