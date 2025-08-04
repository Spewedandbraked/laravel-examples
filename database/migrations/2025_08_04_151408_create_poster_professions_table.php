<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('poster_profession', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profession_id')->constrained()->onDelete('cascade');
            $table->foreignId('poster_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('poster_profession');
    }
};