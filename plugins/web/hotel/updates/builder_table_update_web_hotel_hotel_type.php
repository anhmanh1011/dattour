<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelHotelType extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_hotel_type', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_hotel_type', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
