<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelEventType extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_event_type', function($table)
        {
            $table->text('slug');
            $table->increments('id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_event_type', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->nullable(false)->unsigned()->default(null)->change();
            $table->string('name', 191)->change();
        });
    }
}
