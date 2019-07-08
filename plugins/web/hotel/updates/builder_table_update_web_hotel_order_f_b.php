<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderFB extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_f_b', function($table)
        {
            $table->string('fb_title', 191)->nullable();
            $table->string('content')->nullable();
            $table->dropColumn('foodbeverage_id');
            $table->dropColumn('danhxung');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_f_b', function($table)
        {
            $table->dropColumn('fb_title');
            $table->dropColumn('content');
            $table->string('foodbeverage_id', 191)->nullable();
            $table->string('danhxung', 191)->nullable();
        });
    }
}
