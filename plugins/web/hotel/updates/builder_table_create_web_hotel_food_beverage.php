<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelFoodBeverage extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_food_beverage', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('kind_id');
            $table->smallInteger('type_id');
            $table->smallInteger('location_id');
            $table->integer('price');
            $table->boolean('active')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_food_beverage');
    }
}