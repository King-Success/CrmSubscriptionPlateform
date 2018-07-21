<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('company');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('region')->nullable();
            $table->integer('postal_code');
            $table->string('country');
            $table->integer('credit_card_number')->unique();
            $table->integer('month');
            $table->integer('year');
            $table->integer('cvv2');
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
        Schema::dropIfExists('subscribers');
    }
}
