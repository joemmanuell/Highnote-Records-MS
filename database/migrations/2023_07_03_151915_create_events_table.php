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
            $table->id('eventID');
            $table->string('eventName');
            $table->date('eventDate');
            $table->integer('artistID');
            $table->string('eventOrganizer');
            $table->float('fixedFee', 100, 2);
            $table->float('doorFee', 100, 2);
            $table->float('merchandiseSales', 100, 2);
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
