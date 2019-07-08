<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelStatus extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_status', function($table)
        {
            $table->renameColumn('id', 'status_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_status', function($table)
        {
            $table->renameColumn('status_id', 'id');
        });
    }
}
