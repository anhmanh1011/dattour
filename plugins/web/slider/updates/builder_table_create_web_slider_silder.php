<?php namespace Web\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebSliderSilder extends Migration
{
    public function up()
    {
        Schema::create('web_slider_silder', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->text('active')->nullable();
            $table->text('link')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_slider_silder');
    }
}
