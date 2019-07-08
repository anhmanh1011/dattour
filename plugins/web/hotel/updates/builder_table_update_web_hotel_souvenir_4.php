<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelSouvenir4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_souvenir', function($table)
        {
            $table->integer('star_4')->nullable();
            $table->smallInteger('star_5')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_souvenir', function($table)
        {
            $table->dropColumn('star_4');
            $table->dropColumn('star_5');
        });
    }
}
