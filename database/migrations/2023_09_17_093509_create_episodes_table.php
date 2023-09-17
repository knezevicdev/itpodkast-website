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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->text('slug');
            $table->text('title');
            $table->text('description');
            $table->text('cover_image_url');
            $table->dateTime('published_at');
            $table->text('audio_url');
            $table->integer('audio_length_in_seconds');
            $table->integer('audio_size_in_kilobytes');
            $table->text('apple_podcasts_url');
            $table->text('google_podcasts_url');
            $table->text('spotify_url');
            $table->text('deezer_url');
            $table->text('youtube_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
