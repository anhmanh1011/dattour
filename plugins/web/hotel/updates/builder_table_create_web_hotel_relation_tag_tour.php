<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTagTour extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tag_tour', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tour_id');
            $table->integer('tag_id');
            $table->primary(['tour_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tag_tour');
    }
}
