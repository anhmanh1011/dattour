<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverageType2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_food_beverage_type', function($table)
        {
            $table->dropColumn('active');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_food_beverage_type', function($table)
        {
            $table->boolean('active')->nullable()->default(0);
        });
    }
}
