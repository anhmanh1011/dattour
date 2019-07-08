<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRoom extends Migration
{
    public function up()
    {
        Schema::rename('web_hotel_type_room', 'web_hotel_room');
        Schema::table('web_hotel_room', function($table)
        {
            $table->boolean('hot')->nullable()->default(0);
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::rename('web_hotel_room', 'web_hotel_type_room');
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->dropColumn('hot');
            $table->dropColumn('slug');
        });
    }
}
