<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelSouvenir extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_souvenir', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->boolean('active')->nullable()->default(0);
            $table->integer('price');
            $table->string('description')->nullable();
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_souvenir');
    }
}
