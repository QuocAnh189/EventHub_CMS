<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('function_id')->constrained('functions')->cascadeOnDelete();
            $table->foreignUuid('role_id')->constrained('roles')->cascadeOnDelete();
            $table->foreignUuid('command_id')->constrained('commands')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['function_id', 'role_id', 'command_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
