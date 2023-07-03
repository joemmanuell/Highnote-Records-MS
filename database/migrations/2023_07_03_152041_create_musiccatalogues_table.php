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
        Schema::create('musiccatalogues', function (Blueprint $table) {
            $table->id('sondID');
            $table->integer('artistID');
            $table->string('title');
            $table->string('platform');
            $table->float('ratePerStream');
            $table->integer('streams');
            $table->float('productionCost');
            $table->float('distributionCost');   
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
        Schema::dropIfExists('musiccatalogues');
    }
};
