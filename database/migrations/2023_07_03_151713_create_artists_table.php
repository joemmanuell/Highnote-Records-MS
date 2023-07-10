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
        Schema::create('artists', function (Blueprint $table) {
            $table->integer('artistID');
            $table->string('artistName');
            $table->string('legalName');
            $table->integer('contractID');
            $table->enum('sex', ['male', 'female']);
            $table->integer('age');
            $table->string('nationality');
            $table->bigInteger('contactDetails');
            $table->string('address');
            $table->string('socialMediaHandle');
            $table->string('biography');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
};
