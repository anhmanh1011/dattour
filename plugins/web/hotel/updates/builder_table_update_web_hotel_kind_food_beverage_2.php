<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelKindFoodBeverage2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_kind_food_beverage', function($table)
        {
            $table->boolean('active')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_kind_food_beverage', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
