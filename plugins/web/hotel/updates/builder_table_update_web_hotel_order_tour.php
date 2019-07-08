<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebHotelOrderTour extends Migration
{
    public function up()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('first_name')->nullable();
            $table->string('danhxung')->nullable();
            $table->integer('id_tour')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('tour_id')->change();
            $table->string('first_name_receive')->change();
            $table->string('name_receive')->change();
            $table->string('phone_receive')->change();
            $table->dropColumn('name_customer');
            $table->dropColumn('email_customer');
            $table->dropColumn('phone_customer');
            $table->dropColumn('first_name_customer');
            $table->dropColumn('danhxung_customer');
        });
    }
    
    public function down()
    {
        Schema::table('web_hotel_order_tour', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('first_name');
            $table->dropColumn('danhxung');
            $table->dropColumn('id_tour');
            $table->increments('id')->unsigned()->change();
            $table->string('tour_id', 191)->change();
            $table->string('first_name_receive', 191)->change();
            $table->string('name_receive', 191)->change();
            $table->string('phone_receive', 191)->change();
            $table->string('name_customer', 191);
            $table->string('email_customer', 191)->nullable();
            $table->string('phone_customer', 191)->nullable();
            $table->string('first_name_customer', 191)->nullable();
            $table->string('danhxung_customer', 191)->nullable();
        });
    }
}
