<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTagFb extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tag_fb', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('food_beverage_id');
            $table->smallInteger('tag_id');
            $table->primary(['food_beverage_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tag_fb');
    }
}
