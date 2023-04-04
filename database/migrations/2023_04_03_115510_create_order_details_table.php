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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('cake_id')->nullable();
            $table->foreign('cake_id')->references('cakeid')->on('categorycakes')->onDelete('cascade');
            $table->unsignedBigInteger('pastry_id')->nullable();
            $table->foreign('pastry_id')->references('pastryid')->on('categorypastries')->onDelete('cascade');
            $table->float('price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
