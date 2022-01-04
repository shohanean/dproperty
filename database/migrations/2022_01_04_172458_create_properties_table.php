<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('property_photo')->default('defaultpropertyphoto.png');
            $table->string('title');
            $table->integer('type');
            $table->integer('rent_amount');
            $table->integer('meal_cost')->nullable();
            $table->string('bed_type');
            $table->string('bathroom');
            $table->string('address');
            $table->integer('location_id');
            $table->text('google_map');
            $table->longText('description');
            $table->longText('features');
            $table->string('c_name');
            $table->string('c_email');
            $table->string('c_phone_number');
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
        Schema::dropIfExists('properties');
    }
}
