<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelTypeRoom3 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->integer('new_price')->nullable();
            $table->renameColumn('sale', 'discount');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_type_room', function($table)
        {
            $table->dropColumn('new_price');
            $table->renameColumn('discount', 'sale');
        });
    }
}
