<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('notes')->nullable();
            $table->boolean('notes_visibility')->default(false);
            $table->boolean('collapsed')->default(false);
            $table->boolean('private')->default(true);
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('session_id')->constrained('sessions', 'id')->cascadeOnDelete();
            $table->foreignId('exercise_id')->constrained('exercises', 'id')->cascadeOnDelete();
            $table->json('json')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
};
