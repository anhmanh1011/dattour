<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesetting extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('meta_title');
            $table->text('meta_key');
            $table->text('meta_description');
            $table->text('content');
            $table->integer('phone');
            $table->integer('hotline');
            $table->text('link_facebook');
            $table->text('link_youtobe');
            $table->text('link_google');
            $table->text('address');
            $table->text('email');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('seo_title', 191);
            $table->string('seo_description', 191);
            $table->string('seo_keywords', 191);
            $table->string('canonical_url', 191);
            $table->string('redirect_url', 191);
            $table->text('link_group')->nullable();
            $table->renameColumn('name', 'title_web');
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_', function($table)
        {
            $table->dropColumn('id');
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_key');
            $table->dropColumn('meta_description');
            $table->dropColumn('content');
            $table->dropColumn('phone');
            $table->dropColumn('hotline');
            $table->dropColumn('link_facebook');
            $table->dropColumn('link_youtobe');
            $table->dropColumn('link_google');
            $table->dropColumn('address');
            $table->dropColumn('email');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('seo_title');
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_keywords');
            $table->dropColumn('canonical_url');
            $table->dropColumn('redirect_url');
            $table->dropColumn('link_group');
            $table->renameColumn('title_web', 'name');
        });
    }
}
