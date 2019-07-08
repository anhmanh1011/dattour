<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesettingPartner extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_partner', function($table)
        {
            $table->increments('id')->nullable(false)->unsigned()->default(null)->change();
            $table->string('image', 500)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_partner', function($table)
        {
            $table->increments('id')->nullable(false)->unsigned()->default(null)->change();
            $table->string('image', 500)->nullable(false)->change();
        });
    }
}
