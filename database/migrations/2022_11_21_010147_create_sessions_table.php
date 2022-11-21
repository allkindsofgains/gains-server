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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('block_id')->constrained('blocks', 'id')->cascadeOnDelete();
            $table->date('start_date');
            $table->date('end_date');
            $table->double('session_rpe', 1, 1);
            $table->json('json');
            $table->text('notes')->nullable();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
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
        Schema::dropIfExists('sessions');
    }
};
