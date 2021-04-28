<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('userId');
            $table->date('dateOfBirth');
            $table->string('industry');
            $table->string('status');
            $table->json('externalAgency')->nullable();
            $table->json('certificationAgency')->nullable();
            $table->string('gender');
            $table->string('genderNomenclature');
            $table->string('breed');
            $table->string('breedType');
            $table->string('breedQuality');
            $table->string('breedPurpose');
            $table->string('markingsOrColor');
            $table->longText('description');
            $table->boolean('featured')->nullable();
            $table->json('images')->nullable();
            $table->json('videos')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('createdBy')->nullable();
            $table->string('updatedBy')->nullable();
            $table->string('title')->nullable();
            $table->boolean('autoDetermine')->nullable();
            $table->string('priceType')->nullable();
            $table->mediumInteger('fixedPrice')->nullable();
            $table->mediumInteger('toPrice')->nullable();
            $table->mediumInteger('fromPrice')->nullable();
            $table->mediumInteger('notPricedText')->nullable();
            $table->string('priceUnits')->nullable();
            $table->boolean('visibility')->nullable();
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
        Schema::dropIfExists('pets');
    }
}
