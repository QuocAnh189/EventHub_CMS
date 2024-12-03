<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('inviter_id')->constrained('users');
            $table->foreignUuid('invitee_id')->constrained('users');
            $table->foreignUuid('event_id')->constrained('events');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['inviter_id', 'invitee_id', 'event_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
