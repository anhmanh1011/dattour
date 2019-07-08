<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel13 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('content', 'room');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('room', 'content');
        });
    }
}
