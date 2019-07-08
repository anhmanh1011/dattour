<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverageType extends Migration
{
    public function up()
    {
        Schema::rename('web_hotel_type_food_beverage', 'web_hotel_food_beverage_type');
    }
    
    public function down()
    {
        Schema::rename('web_hotel_food_beverage_type', 'web_hotel_type_food_beverage');
    }
}
