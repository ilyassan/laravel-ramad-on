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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text("content", 255);
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete();
            $table->foreignId("experience_id")->nullable()->constrained("experiences")->cascadeOnDelete();
            $table->foreignId("recipe_id")->nullable()->constrained("recipes")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
