<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel14 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->text('rooms')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->dropColumn('rooms');
        });
    }
}
