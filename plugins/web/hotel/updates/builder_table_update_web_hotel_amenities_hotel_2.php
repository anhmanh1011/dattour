<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelAmenitiesHotel2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_amenities_hotel', function($table)
        {
            $table->string('icon');
            $table->string('name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_amenities_hotel', function($table)
        {
            $table->dropColumn('icon');
            $table->text('name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('description');
        });
    }
}
