<?php namespace Web\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSliderSilder extends Migration
{
    public function up()
    {
        Schema::table('web_slider_silder', function($table)
        {
            $table->string('name')->nullable()->unsigned(false)->default(null)->change();
            $table->string('description')->nullable()->unsigned(false)->default(null)->change();
            $table->boolean('active')->nullable()->unsigned(false)->default(null)->change();
            $table->string('link')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_slider_silder', function($table)
        {
            $table->text('name')->nullable()->unsigned(false)->default(null)->change();
            $table->text('description')->nullable()->unsigned(false)->default(null)->change();
            $table->text('active')->nullable()->unsigned(false)->default(null)->change();
            $table->text('link')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
