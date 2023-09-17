<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'episodes' => Episode::orderBy('number', 'desc')->take(3)->get()
        ]);
    }

    public function epizode(Request $request): View
    {
        $page = intval($request->query('page', 1));
        if ($page < 1) $page = 1;
        $offset = ($page - 1) * 6;

        return view('epizode', [
            'episodes' => Episode::orderBy('number', 'desc')->skip($offset)->take(6)->get(),
            'page' => $page,
            'totalPages' => ceil(Episode::count() / 6)
        ]);
    }

    public function epizoda(string $slug): View
    {
        $episode = Episode::where('slug', $slug)->firstOrFail();

        return view('epizoda', [
            'episode' => $episode,
            'episodes' => Episode::orderBy('number', 'desc')->take(3)->get()
        ]);
    }

    public function kontakt(): View
    {
        return view('kontakt');
    }
}
