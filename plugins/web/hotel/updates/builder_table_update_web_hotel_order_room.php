<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderRoom extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->integer('id_room')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('first_name')->change();
            $table->string('name')->change();
            $table->string('danhxung')->change();
            $table->string('phone')->change();
            $table->string('email')->change();
            $table->string('first_name_receiver')->change();
            $table->string('name_receiver')->change();
            $table->string('phone_receiver')->change();
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_room', function($table)
        {
            $table->dropColumn('id_room');
            $table->increments('id')->unsigned()->change();
            $table->string('first_name', 191)->change();
            $table->string('name', 191)->change();
            $table->string('danhxung', 191)->change();
            $table->string('phone', 191)->change();
            $table->string('email', 191)->change();
            $table->string('first_name_receiver', 191)->change();
            $table->string('name_receiver', 191)->change();
            $table->string('phone_receiver', 191)->change();
        });
    }
}
