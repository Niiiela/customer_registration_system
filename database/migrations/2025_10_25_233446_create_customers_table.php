<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 80);
            $table->date('date_birth')->nullable();
            $table->string('cpf', 11)->unique();
            $table->string('rg', 11)->nullable();
            $table->string('issuing_authority')->nullable();
            $table->string('state', 2)->nullable();
            $table->string('sex', 1)->nullable();
            $table->string('civil_status', 12)->nullable();
            $table->string('status', 9)->default('Ativo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
