<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverage extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->text('description')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('content');
        });
    }
}
