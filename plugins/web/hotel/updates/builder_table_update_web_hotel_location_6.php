<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelLocation6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->dropColumn('north');
            $table->dropColumn('south');
            $table->dropColumn('central');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->boolean('north')->nullable();
            $table->boolean('south')->nullable();
            $table->boolean('central')->nullable();
        });
    }
}
