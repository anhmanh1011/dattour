<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTyperoom extends Migration
{
    public function up()
    {
        Schema::rename('web_hotel_type_room', 'web_hotel_typeroom');
    }
    
    public function down()
    {
        Schema::rename('web_hotel_typeroom', 'web_hotel_type_room');
    }
}
