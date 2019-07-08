<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelTour extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_tour', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->boolean('active')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('price')->nullable();
            $table->integer('max_people')->nullable();
            $table->text('location')->nullable();
            $table->text('tag')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_tour');
    }
}
