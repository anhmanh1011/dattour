<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverage4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->renameColumn('percent', 'discount');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->renameColumn('discount', 'percent');
        });
    }
}
