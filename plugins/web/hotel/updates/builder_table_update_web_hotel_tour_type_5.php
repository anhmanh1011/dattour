<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTourType5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('active')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->boolean('active')->nullable(false)->change();
        });
    }
}
