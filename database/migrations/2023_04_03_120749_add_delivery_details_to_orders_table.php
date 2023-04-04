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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('delivery_email')->after('total_quantity');
            $table->string('delivery_name')->after('delivery_email');
            $table->string('delivery_address')->after('delivery_name');
            $table->string('delivery_state')->after('delivery_address');
            $table->string('delivery_phone')->after('delivery_state');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
