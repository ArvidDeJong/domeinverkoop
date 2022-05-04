<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('domein')->nullable();
            $table->string('keuze')->nullable();
            $table->string('bedrijfsnaam')->nullable();
            $table->string('naam')->nullable();
            $table->string('adres')->nullable();
            $table->string('postcode')->nullable();
            $table->string('woonplaats')->nullable();
            $table->string('land')->nullable();
            $table->string('email')->nullable();
            $table->string('telefoon')->nullable();
            $table->string('opmerkingen')->nullable();
            $table->double('bieding')->nullable();
            $table->string('btw')->nullable(); // BTW nr
            $table->double('prijs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
