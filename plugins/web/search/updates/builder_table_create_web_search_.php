<?php namespace Web\Search\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebSearch extends Migration
{
    public function up()
    {
        Schema::create('web_search_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('count');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_search_');
    }
}
