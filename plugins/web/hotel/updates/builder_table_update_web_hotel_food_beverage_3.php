<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverage3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->integer('percent')->nullable();
            $table->integer('price_new')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->dropColumn('percent');
            $table->dropColumn('price_new');
        });
    }
}