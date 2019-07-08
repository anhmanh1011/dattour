<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->boolean('active')->nullable()->default(0);
            $table->increments('id')->unsigned(false)->change();
            $table->string('phone')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->dropColumn('active');
            $table->increments('id')->unsigned()->change();
            $table->string('phone', 191)->change();
        });
    }
}
