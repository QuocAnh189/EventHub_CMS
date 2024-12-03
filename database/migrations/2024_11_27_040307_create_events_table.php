<?php

use App\Enum\EventCycle;
use App\Enum\EventPayment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->text('description');
            $table->string('cover_image_url');
            $table->string('cover_image_file_name');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('location');
            $table->string('path_location');
            $table->enum('event_cycle_type', EventCycle::toArray());
            $table->enum('event_payment_type', EventPayment::toArray());
            $table->boolean('is_private')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'name']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
