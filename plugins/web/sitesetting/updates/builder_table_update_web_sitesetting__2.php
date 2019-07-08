<?php namespace Web\Sitesetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebSitesetting2 extends Migration
{
    public function up()
    {
        Schema::table('web_sitesetting_', function($table)
        {
            $table->text('title_web')->nullable()->change();
            $table->text('meta_title')->nullable()->change();
            $table->text('meta_key')->nullable()->change();
            $table->text('meta_description')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->integer('phone')->nullable()->change();
            $table->integer('hotline')->nullable()->change();
            $table->text('link_facebook')->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('web_sitesetting_', function($table)
        {
            $table->text('title_web')->nullable(false)->change();
            $table->text('meta_title')->nullable(false)->change();
            $table->text('meta_key')->nullable(false)->change();
            $table->text('meta_description')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->integer('phone')->nullable(false)->change();
            $table->integer('hotline')->nullable(false)->change();
            $table->text('link_facebook')->nullable(false)->change();
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }
}
