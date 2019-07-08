<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel9 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->integer('price_new')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->dropColumn('price_new');
        });
    }
}
