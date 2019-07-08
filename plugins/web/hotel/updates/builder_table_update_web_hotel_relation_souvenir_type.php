<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelRelationSouvenirType extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_relation_souvenir_type', function($table)
        {
            $table->smallInteger('souvenir_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_relation_souvenir_type', function($table)
        {
            $table->integer('souvenir_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
