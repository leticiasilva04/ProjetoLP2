<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
     public function up()
     {
         Schema::create('events', function (Blueprint $table) {
             $table->id();
             $table->timestamps();
             $table->string("title");
             $table->text("description");
             $table->string("city");
             $table->string("species");
             $table->string("breed");
             $table->string("gender");
             $table->string("size");

             
         });
     }
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}