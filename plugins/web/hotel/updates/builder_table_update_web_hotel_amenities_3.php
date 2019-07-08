<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelAmenities3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->integer('star_4');
            $table->smallInteger('star_5');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_amenities', function($table)
        {
            $table->dropColumn('star_4');
            $table->dropColumn('star_5');
        });
    }
}
