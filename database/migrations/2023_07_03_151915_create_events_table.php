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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id');
            $table->string('eventName');
            $table->date('eventDate');
            $table->integer('artistID');
            $table->string('eventOrganizer');
            $table->decimal('fixedFee', 8, 2);
            $table->decimal('doorFee', 8, 2);
            $table->decimal('merchandiseSales', 8, 2);
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
        Schema::dropIfExists('events');
    }
};
