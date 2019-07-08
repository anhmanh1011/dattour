<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTour18 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->string('departure_date')->nullable();
            $table->integer('min_age')->nullable();
            $table->integer('maximum_seat')->nullable();
            $table->text('include')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour', function($table)
        {
            $table->dropColumn('departure_date');
            $table->dropColumn('min_age');
            $table->dropColumn('maximum_seat');
            $table->dropColumn('include');
        });
    }
}
