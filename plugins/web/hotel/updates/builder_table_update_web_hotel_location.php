<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelLocation extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_location', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('content');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
