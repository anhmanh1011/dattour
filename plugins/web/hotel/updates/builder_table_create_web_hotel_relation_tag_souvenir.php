<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelRelationTagSouvenir extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_relation_tag_souvenir', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('souvenir_id');
            $table->smallInteger('tag_id');
            $table->primary(['souvenir_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_relation_tag_souvenir');
    }
}
