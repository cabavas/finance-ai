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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('transaction_types');
            $table->string('name');
            $table->decimal('amount', 10, 2);
            $table->foreignId('category_id')->constrained('transaction_categories');
            $table->dateTime('date');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_models');
    }
};
