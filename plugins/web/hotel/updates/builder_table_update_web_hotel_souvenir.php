<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelSouvenir extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_souvenir', function($table)
        {
            $table->boolean('hot')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_souvenir', function($table)
        {
            $table->dropColumn('hot');
        });
    }
}
