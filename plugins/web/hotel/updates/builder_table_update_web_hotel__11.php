<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotel11 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('type_id', 'types_id');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_', function($table)
        {
            $table->renameColumn('types_id', 'type_id');
        });
    }
}
