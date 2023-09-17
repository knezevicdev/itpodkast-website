<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use App\Models\Episode;

class RssFeedController extends Controller
{
    public function generate()
    {
        $episodes = Episode::orderBy('published_at', 'desc')->get();

        $feed = View::make('rss.feed', compact('episodes'));

        return Response::make($feed, '200')->header('Content-Type', 'application/xml');
    }
}
