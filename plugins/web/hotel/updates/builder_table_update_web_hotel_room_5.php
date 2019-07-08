<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRoom5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_room', function($table)
        {
            $table->integer('star_4')->default(0)->change();
            $table->integer('star_5')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_room', function($table)
        {
            $table->integer('star_4')->default(null)->change();
            $table->integer('star_5')->default(null)->change();
        });
    }
}
