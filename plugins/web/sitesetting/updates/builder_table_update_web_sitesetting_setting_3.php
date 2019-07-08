<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesettingSetting3 extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->dropColumn('robot_follow');
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->string('robot_follow', 191)->nullable();
        });
    }
}
