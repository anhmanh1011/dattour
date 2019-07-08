<?php namespace Web\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebContactContact extends Migration
{
    public function up()
    {
        Schema::create('web_contact_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_contact_contact');
    }
}
