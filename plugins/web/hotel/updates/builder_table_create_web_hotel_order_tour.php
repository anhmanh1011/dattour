<?php namespace Web\Hotel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebHotelOrderTour extends Migration
{
    public function up()
    {
        Schema::create('web_hotel_order_tour', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_customer');
            $table->string('email_customer')->nullable();
            $table->string('phone_customer')->nullable();
            $table->string('tour_id')->nullable();
            $table->string('first_name_customer')->nullable();
            $table->string('danhxung_customer')->nullable();
            $table->string('first_name_receive')->nullable();
            $table->string('name_receive')->nullable();
            $table->string('phone_receive')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('web_hotel_order_tour');
    }
}
