<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTour24 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->integer('star_rate4')->nullable()->change();
            $table->integer('star_rate5')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->integer('star_rate4')->nullable(false)->change();
            $table->integer('star_rate5')->nullable(false)->change();
        });
    }
}
