<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel15 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->text('location_id')->nullable()->change();
            $table->integer('star')->nullable()->change();
            $table->text('phone')->nullable()->change();
            $table->integer('types_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->text('location_id')->nullable(false)->change();
            $table->integer('star')->nullable(false)->change();
            $table->text('phone')->nullable(false)->change();
            $table->integer('types_id')->nullable(false)->change();
        });
    }
}
