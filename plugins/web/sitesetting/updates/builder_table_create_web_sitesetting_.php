<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebSitesetting extends Migration
{
    public function up()
    {
        Schema::create('web_sitesetting_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_sitesetting_');
    }
}
