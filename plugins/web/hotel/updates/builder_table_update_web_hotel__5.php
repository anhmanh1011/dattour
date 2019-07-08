<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
