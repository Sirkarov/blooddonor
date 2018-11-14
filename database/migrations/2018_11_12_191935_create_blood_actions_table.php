<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('location');
            $table->unsignedInteger('city_id')->nullable();
            $table->date('date');
            $table->time('time');

            $table->timestamps();


            #Constraints
            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_actions');
    }
}
