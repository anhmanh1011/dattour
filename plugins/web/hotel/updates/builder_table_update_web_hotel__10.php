<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel10 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->smallInteger('type_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->dropColumn('type_id');
        });
    }
}
