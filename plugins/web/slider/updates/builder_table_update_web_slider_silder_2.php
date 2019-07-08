<?php namespace Web\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSliderSilder2 extends Migration
{
    public function up()
    {
        Schema::table('web_slider_silder', function($table)
        {
            $table->string('name')->change();
            $table->string('description')->change();
            $table->string('link')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_slider_silder', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('description', 191)->change();
            $table->string('link', 191)->change();
        });
    }
}
