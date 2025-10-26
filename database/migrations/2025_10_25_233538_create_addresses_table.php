<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 100)->nullable();
            $table->integer('number')->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zip_code', 9)->nullable();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
