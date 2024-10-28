<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('taker_id');
            $table->unsignedBigInteger('giver_id');
            $table->unsignedBigInteger('project_id');
            $table->integer('amount');
            $table->longText('comment');
            $table->timestamps();
            $table->foreign('taker_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('giver_id')->references('id')->on('users')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
