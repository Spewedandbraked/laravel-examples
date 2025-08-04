<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poster_id')->constrained()->onDelete('cascade');
            $table->foreignId('publisher_id')->constrained('users')->onDelete('cascade');
            $table->text('task_description');
            $table->dateTime('deadline');
            $table->decimal('reward_amount', 10, 2);
            $table->timestamps();
        });

        Schema::create('commission_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commission_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->unique(['commission_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('commission_user');
        Schema::dropIfExists('commissions');
    }
};
