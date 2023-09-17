<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    public function getFormattedDurationAttribute (): string {
        $seconds = $this->audio_length_in_seconds;

        if ($seconds >= 3600) {
            $hours = floor($seconds / 3600);
            $minutes = floor(($seconds % 3600) / 60);
            $formattedTime = $hours . 'hr';
            if ($minutes > 0) {
                $formattedTime .= ' ' . $minutes . 'min';
            }
        } elseif ($seconds >= 60) {
            $minutes = floor($seconds / 60);
            $formattedTime = $minutes . 'min';
        } else {
            $formattedTime = $seconds . 'sec';
        }

        return $formattedTime;
    }

    protected function applePodcastsUrl(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strlen(trim($value)) === 0 ? config('app.apple_podcasts_url') : $value,
        );
    }

    protected function googlePodcastsUrl(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strlen(trim($value)) === 0 ? config('app.google_podcasts_url') : $value,
        );
    }

    protected function spotifyUrl(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strlen(trim($value)) === 0 ? config('app.spotify_url') : $value,
        );
    }

    protected function deezerUrl(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strlen(trim($value)) === 0 ? config('app.deezer_url') : $value,
        );
    }

    protected function youtubeUrl(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strlen(trim($value)) === 0 ? config('app.youtube_url') : $value,
        );
    }
}
