<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationTourType extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_tour_type', function($table)
        {
            $table->integer('tour_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_tour_type', function($table)
        {
            $table->smallInteger('tour_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
