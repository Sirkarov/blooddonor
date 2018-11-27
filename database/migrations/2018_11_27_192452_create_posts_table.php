<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('blood_type_id')->nullable();
            $table->text('description');
            $table->timestamps();



            #Constraints
            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("blood_type_id")->references("id")->on("blood_types")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
