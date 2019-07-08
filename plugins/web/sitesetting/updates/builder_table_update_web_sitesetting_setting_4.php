<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesettingSetting4 extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->text('live_chat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->dropColumn('live_chat');
        });
    }
}
