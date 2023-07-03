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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('contractID');
            $table->integer('artistID');
            $table->date('startDate');
            $table->date('endDate');
            $table->decimal('royaltyRate', 5, 2);
            $table->decimal('advanceFee', 8, 2);
            $table->decimal('eventCut', 5, 2);
            $table->decimal('merchandiseCut', 5, 2);     
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
        Schema::dropIfExists('contracts');
    }
};
