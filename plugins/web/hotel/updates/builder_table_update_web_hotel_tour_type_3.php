<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTourType3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('deleted_at')->default('0000-00-00 00:00:00');
        });
    }
}
