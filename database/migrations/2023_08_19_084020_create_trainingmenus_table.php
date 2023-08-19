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
        Schema::create('trainingmenus', function (Blueprint $table) {
            $table->id();
            $table->string('title', 10);
            $table->string('menu1', 20);
            $table->string('menu2', 20);
            $table->string('menu3', 20);
            $table->string('menu4', 20);
            $table->string('menu5', 20);
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
        Schema::dropIfExists('trainingmenus');
    }
};
