<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverageKind extends Migration
{
    public function up()
    {
        Schema::rename('web_hotel_kind_food_beverage', 'web_hotel_food_beverage_kind');
    }
    
    public function down()
    {
        Schema::rename('web_hotel_food_beverage_kind', 'web_hotel_kind_food_beverage');
    }
}
