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
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->constrained('exercises', 'id')->cascadeOnDelete();
            $table->integer('reps')->nullable();
            $table->double('rpe', 1, 1)->nullable();
            $table->integer('weight')->nullable();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('session_id')->constrained('sessions', 'id')->cascadeOnDelete();
            $table->foreignId('log_id')->constrained('logs', 'id')->cascadeOnDelete();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('sets');
    }
};
