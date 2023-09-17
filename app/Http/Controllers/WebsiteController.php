<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    private $episodes = [
        [
            "slug" => "epizoda-11-testiranje-softvera-gost-dejan-milicic",
            "title" => "Epizoda 11: Testiranje Softvera (gost: Dejan Miličić)",
            "number" => "11",
            "duration" => "1hr 15min"
        ],
        [
            "slug" => "epizoda-10-edge-computing-gost-nikola-djuza",
            "title" => "Epizoda 10: Edge Computing (gost: Nikola Đuza)",
            "number" => "10",
            "duration" => "1hr 4min"
        ],
        [
            "slug" => "epizoda-9-chrome-extensions-gost-bojan-ivanac",
            "title" => "Epizoda 9: Chrome Extensions (gost: Bojan Ivanac)",
            "number" => "9",
            "duration" => "47min 11sec"
        ],
        [
            "slug" => "epizoda-8-document-based-modeling-gost-dorde-dukic",
            "title" => "Epizoda 8: Document Based Modeling (gost: Đorđe Đukić)",
            "number" => "8",
            "duration" => "1hr 43min"
        ],
        [
            "slug" => "epizoda-7-ruby-gost-nikola-djuza",
            "title" => "Epizoda 7: Ruby (gost: Nikola Đuza)",
            "number" => "7",
            "duration" => "1hr 03min"
        ],
        [
            "slug" => "epizoda-6-php-gost-srdjan-marjanovic",
            "title" => "Epizoda 6: PHP (gost: Srđan Marjanović)",
            "number" => "6",
            "duration" => "1hr 04min"
        ],
        [
            "slug" => "epizoda-5-anti-uzori",
            "title" => "Epizoda 5: Anti-uzori",
            "number" => "5",
            "duration" => "48min 11sec"
        ],
        [
            "slug" => "epizoda-4-react-18-gost-kim-novak",
            "title" => "Epizoda 4: React 18 (gost: Kim Novak)",
            "number" => "4",
            "duration" => "43min 36sec"
        ],
        [
            "slug" => "epizoda-3-react-native-gost-aleksandar-okiljevic",
            "title" => "Epizoda 3: React Native (gost: Aleksandar Okiljević)",
            "number" => "3",
            "duration" => "40min 49sec"
        ],
        [
            "slug" => "epizoda-2-changelog-pyodide-nodegui-rome-tools-zx-kafka-summit",
            "title" => "Epizoda 2: Changelog (Pyodide, NodeGui, Rome tools, ZX, Kafka Summit...)",
            "number" => "2",
            "duration" => "31min 53sec"
        ],
        [
            "slug" => "epizoda-1-autentifikacija-i-autorizacija",
            "title" => "Epizoda 1: Autentifikacija i autorizacija",
            "number" => "1",
            "duration" => "45min 22sec"
        ],
        [
            "slug" => "epizoda-0-hello-world",
            "title" => "Epizoda 0: Hello World!",
            "number" => "0",
            "duration" => "40min 49sec"
        ]
    ];

    public function index(): View
    {
        return view('index', [
            'episodes' => array_slice($this->episodes, 0, 3)
        ]);
    }

    public function epizode(Request $request): View
    {
        $page = $request->query('page', 1);
        $offset = ($page - 1) * 6;

        return view('epizode', [
            'episodes' => array_slice($this->episodes, $offset, 6),
            'page' => $page,
            'totalPages' => ceil(count($this->episodes) / 6)
        ]);
    }

    public function epizoda(string $slug): View
    {
        $episode = collect($this->episodes)->firstWhere('slug', $slug);

        return view('epizoda', [
            'episode' => $episode,
            'episodes' => array_slice($this->episodes, 0, 3)
        ]);
    }
}
