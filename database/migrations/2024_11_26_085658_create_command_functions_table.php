<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('command_functions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('command_id')->constrained('commands')->cascadeOnDelete();
            $table->foreignUuid('function_id')->constrained('functions')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('command_functions');
    }
};
