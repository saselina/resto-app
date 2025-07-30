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
        Schema::create('0rders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->unsignedBigInteger('user_id');
            $table->decimal('subTotal', 10,2);
            $table->decimal('tax', 10,2);
            $table->decimal('grand_total', 10,2);
            $table->enum('status', ['pending', 'settlement', 'cooked']);
            $table->Integer('table_number');
            $table->enum('payment_method', ['tunai', 'qris']);
            $table->Integer('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('0rders');
    }
};
