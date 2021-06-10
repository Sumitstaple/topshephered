<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('litters', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->unsignedBigInteger('userId');
            $table->date('dateOfBirth')->nullable();
            $table->string('femaleCount')->nullable();
            $table->string('status')->nullable();
            $table->json('pets')->nullable();
            $table->string('maleCount')->nullable();
            $table->date('expectedDateOfBirth');
            $table->boolean('featured')->default(0);
            $table->json('images')->nullable();
            $table->longText('description')->nullable();
            $table->string('breedQuality')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('createdBy')->nullable();
            $table->string('updatedBy')->nullable();
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
        Schema::dropIfExists('litters');
    }
}
