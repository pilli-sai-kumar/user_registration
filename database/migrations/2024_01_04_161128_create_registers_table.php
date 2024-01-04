<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('mobile');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('country');
            $table->enum('medal',['yes','no'])->nullable();
            $table->enum('t_shirt',['yes','no'])->nullable();
            $table->enum('t_shirt_size',['large','medium','small'])->nullable();
            $table->string('emergency_number');
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
        Schema::dropIfExists('registers');
    }
}
