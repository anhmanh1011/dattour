<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesettingSetting2 extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->string('robot_index')->nullable();
            $table->string('robot_follow')->nullable();
            $table->text('link_youtobe')->nullable()->change();
            $table->text('link_google')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->text('email')->nullable()->change();
            $table->string('seo_title', 191)->nullable()->change();
            $table->string('seo_description', 191)->nullable()->change();
            $table->string('seo_keywords', 191)->nullable()->change();
            $table->string('canonical_url', 191)->nullable()->change();
            $table->string('redirect_url', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_setting', function($table)
        {
            $table->dropColumn('robot_index');
            $table->dropColumn('robot_follow');
            $table->text('link_youtobe')->nullable(false)->change();
            $table->text('link_google')->nullable(false)->change();
            $table->text('address')->nullable(false)->change();
            $table->text('email')->nullable(false)->change();
            $table->string('seo_title', 191)->nullable(false)->change();
            $table->string('seo_description', 191)->nullable(false)->change();
            $table->string('seo_keywords', 191)->nullable(false)->change();
            $table->string('canonical_url', 191)->nullable(false)->change();
            $table->string('redirect_url', 191)->nullable(false)->change();
        });
    }
}
