<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationHotelType extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_hotel_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('hotel_id');
            $table->smallInteger('hotel_type_id');
            $table->primary(['hotel_id','hotel_type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_hotel_type');
    }
}
