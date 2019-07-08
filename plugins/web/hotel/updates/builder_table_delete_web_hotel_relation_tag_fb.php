<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebHotelRelationTagFb extends Migration
{
    public function up()
    {
        Schema::dropIfExists('web_hotel_relation_tag_fb');
    }
    
    public function down()
    {
        Schema::create('web_hotel_relation_tag_fb', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('food_beverage_id');
            $table->integer('tag_id');
            $table->primary(['food_beverage_id','tag_id']);
        });
    }
}
