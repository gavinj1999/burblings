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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('slug')->nullable(false);
            $table->string('title', 1000)->nullable(false);
            $table->string('subtitle', 1000)->nullable(true);
            $table->string('body',12000)->nullable(false);
            $table->string('image', 512)->nullable(true);
            $table->string('thumbnail', 512)->nullable(true);
            $table->integer('category_id')->nullable(false);
            $table->boolean('featured')->default(0);
            $table->boolean('highlight')->default(0);
            $table->integer('order')->nullable(true);
            $table->string('keywords')->nullable(true);
            $table->date('publish_from')->nullable(true);
            $table->date('publish_to')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
