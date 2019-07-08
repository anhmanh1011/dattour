<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverage9 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->string('address', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->dropColumn('address');
        });
    }
}
