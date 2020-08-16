<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_temps', function (Blueprint $table) {
            $table->id();
            $table->string('station_id');
            $table->string('value');
            $table->unsignedBigInteger('log_id');

            $table->foreign('station_id')
                ->references('id')
                ->on('stations');

            $table->foreign('log_id')
                ->references('id')
                ->on('logs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_temps');
    }
}
