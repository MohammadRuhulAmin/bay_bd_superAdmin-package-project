<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('weight');
            $table->unsignedBigInteger('user_id');
            $table->string('phone');
            $table->longText('address');
            $table->integer('salary');
            $table->string('photo');
            $table->string('cv');
            $table->string('appoinment_letter');
            $table->string('user_type');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('userdetails');
    }
}
