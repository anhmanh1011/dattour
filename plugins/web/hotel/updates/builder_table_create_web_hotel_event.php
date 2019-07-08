<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelEvent extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->boolean('active')->nullable()->default(0);
            $table->string('slug');
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->smallInteger('type_id');
            $table->smallInteger('location_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_event');
    }
}
