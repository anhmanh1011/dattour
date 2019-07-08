<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelStates extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_states', function($table)
        {
            $table->text('x')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_states', function($table)
        {
            $table->dropColumn('x');
        });
    }
}
