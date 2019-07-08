<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebSitesettingSetting extends Migration
{
    public function up()
    {
        Schema::create('web_sitesetting_setting', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title_web')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_key')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('content')->nullable();
            $table->integer('phone')->nullable();
            $table->text('link_facebook')->nullable();
            $table->text('link_youtobe')->nullable();
            $table->text('link_google')->nullable();
            $table->text('address')->nullable();
            $table->text('email')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->text('canonical_url')->nullable();
            $table->text('redirect_url')->nullable();
            $table->integer('hotline')->nullable();
            $table->text('link_group')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_sitesetting_setting');
    }
}
