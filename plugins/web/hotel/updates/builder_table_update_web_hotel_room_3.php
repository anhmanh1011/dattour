<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRoom3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_room', function($table)
        {
            $table->integer('max_people')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_room', function($table)
        {
            $table->integer('max_people')->nullable(false)->change();
        });
    }
}
