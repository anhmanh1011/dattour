<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTourType4 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->string('name', 191)->nullable()->change();
            $table->string('slug', 191)->nullable()->change();
            $table->boolean('active')->nullable(false)->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_tour_type', function($table)
        {
            $table->string('name', 191)->nullable(false)->change();
            $table->string('slug', 191)->nullable(false)->change();
            $table->boolean('active')->nullable()->default(0)->change();
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
            $table->timestamp('deleted_at')->default('0000-00-00 00:00:00');
        });
    }
}
