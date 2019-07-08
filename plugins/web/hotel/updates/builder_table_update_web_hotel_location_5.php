<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelLocation5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->renameColumn('state_id', 'states_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->renameColumn('states_id', 'state_id');
        });
    }
}
