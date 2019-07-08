<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTypeRoom5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->integer('number_of_bed')->nullable();
            $table->integer('max_people');
            $table->renameColumn('room_free', 'acreage');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->dropColumn('number_of_bed');
            $table->dropColumn('max_people');
            $table->renameColumn('acreage', 'room_free');
        });
    }
}
