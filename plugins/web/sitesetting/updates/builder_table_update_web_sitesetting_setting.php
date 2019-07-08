<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesettingSetting extends Migration
{
    public function up()
    {
        Schema::rename('web_sitesetting_', 'web_sitesetting_setting');
    }
    
    public function down()
    {
        Schema::rename('web_sitesetting_setting', 'web_sitesetting_');
    }
}
