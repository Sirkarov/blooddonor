<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("gender_type_id")->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('blood_type_id')->nullable();
            $table->boolean('isAdmin')->default(0);
            $table->date('birth');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('years');
            $table->integer('donations');
            $table->string('phone');
            $table->string('password');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();

            #Constraints
            $table->foreign("gender_type_id")->references("id")->on("gender_types")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('users');
    }
}
