<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelTypeRoom extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_type_room', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->integer('price');
            $table->integer('sale')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_type_room');
    }
}
