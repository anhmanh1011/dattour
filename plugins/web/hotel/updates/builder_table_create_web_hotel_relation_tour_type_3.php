<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTourType3 extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tour_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tour_id');
            $table->smallInteger('type_id');
            $table->primary(['tour_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tour_type');
    }
}
