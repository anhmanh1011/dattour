<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom5 extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->string('content')->nullable();
            $table->dropColumn('danhxung');
            $table->dropColumn('name_receiver');
            $table->dropColumn('phone_receiver');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('content');
            $table->string('danhxung', 191)->nullable();
            $table->string('name_receiver', 191)->nullable();
            $table->string('phone_receiver', 191)->nullable();
        });
    }
}
