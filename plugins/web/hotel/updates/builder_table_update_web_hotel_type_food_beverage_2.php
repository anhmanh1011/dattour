<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTypeFoodBeverage2 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_type_food_beverage', function($table)
        {
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_type_food_beverage', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
