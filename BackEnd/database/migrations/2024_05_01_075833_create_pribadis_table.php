<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePribadisTable extends Migration
{
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nik')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('nationality');
            $table->string('gender');
            $table->string('religion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
