<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebSitesettingPartner extends Migration
{
    public function up()
    {
        Schema::create('web_sitesetting_partner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 200);
            $table->string('image', 500);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_sitesetting_partner');
    }
}
