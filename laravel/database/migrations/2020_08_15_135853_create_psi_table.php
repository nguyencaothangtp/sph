<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psi', function (Blueprint $table) {
            $table->id();
            $table->string('index');
            $table->json('value');
            $table->unsignedBigInteger('log_id');
            $table->timestamps();

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
        Schema::dropIfExists('psi');
    }
}
