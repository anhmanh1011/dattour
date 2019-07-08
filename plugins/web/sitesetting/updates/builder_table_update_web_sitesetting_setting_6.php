<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesettingSetting6 extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->dropColumn('link_group');
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->text('link_group')->nullable();
        });
    }
}
