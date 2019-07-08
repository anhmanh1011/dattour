<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelLocation extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('north')->nullable();
            $table->boolean('south')->nullable();
            $table->boolean('central')->nullable();
            $table->boolean('active')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_location');
    }
}
