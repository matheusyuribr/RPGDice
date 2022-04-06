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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('classe');
            $table->string('raca');
            $table->integer('for');
            $table->integer('des');
            $table->integer('con');
            $table->integer('int');
            $table->integer('sab');
            $table->integer('car');
            $table->integer('vida');
            $table->integer('mana');
            $table->integer('defesa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
};
