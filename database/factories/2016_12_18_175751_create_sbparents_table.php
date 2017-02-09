<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbparentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbparents', function (Blueprint $table) {
           $table->increments('parent_id');
           $table->string('parent_firstname');
           $table->string('parent_lastname');
           $table->string('email')->unique();
           $table->string('phone', 10);
           $table->boolean('sex');
           $table->string('photo')->default('default.jpg');
           $table->string('password');
           $table->integer('driver_id')->nullable();;
           $table->rememberToken();    
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sbparents');
    }
}
