<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelFoodBeverage6 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->integer('star_4')->nullable();
            $table->smallInteger('star_5')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_food_beverage', function($table)
        {
            $table->dropColumn('star_4');
            $table->dropColumn('star_5');
        });
    }
}
