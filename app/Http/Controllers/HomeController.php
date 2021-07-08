<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\InfoService;

class HomeController extends Controller
{
    protected $infoService;
    public function __construct(InfoService $infoService)
    {
        $this->infoService =  $infoService;
    }

    public function index()
    {
        $ip             = $_SERVER['REMOTE_ADDR'];
        $user_agent     = $_SERVER['HTTP_USER_AGENT'];
        $this->infoService->saveInfo($ip, $user_agent);

        $article = Article::all()->sortByDesc('created_at')->first();
        $articlesNew = Article::all()->sortByDesc('created_at')->take(3);
        $articlesBreakings = Article::all()->sortByDesc('created_at')->take(4);

        $mostReadArticles = Article::all()->sortByDesc('created_at')->take(20);

        $articleDoidiens = Article::where('id_category', 1)->get()->sortByDesc('created_at')->take(4);
        $articleDanchus = Article::where('id_category', 2)->get()->sortByDesc('created_at')->take(4);
        $articleDiendans = Article::where('id_category', 3)->get()->sortByDesc('created_at')->take(4);
        $articleChinhtris = Article::where('id_category', 4)->get()->sortByDesc('created_at')->take(4);
        $articleKinhtes = Article::where('id_category', 5)->get()->sortByDesc('created_at')->take(4);
        $articleThegiois = Article::where('id_category', 6)->get()->sortByDesc('created_at')->take(3);
        $articleVntbs = Article::where('id_category', 7)->get()->sortByDesc('created_at')->take(4);

        $articleDoidien = Article::where('id_category', 1)->first();
        $articleDanchu = Article::where('id_category', 2)->first();
        $articleDiendan = Article::where('id_category', 3)->first();
        $articleChinhtri = Article::where('id_category', 4)->first();
        $articleKinhte = Article::where('id_category', 5)->first();
        $articleThegioi = Article::where('id_category', 6)->first();
        $articleVntb = Article::where('id_category', 7)->first();

        return view('index', ['article' => $article, 'articlesBreakings' => $articlesBreakings,
            'articlesNew' => $articlesNew, 'mostReadArticles' => $mostReadArticles,
            'articleDoidien' => $articleDoidien, 'articleDoidiens' => $articleDoidiens,
            'articleDanchu' => $articleDanchu, 'articleDanchus' => $articleDanchus,
            'articleDiendan' => $articleDiendan, 'articleDiendans' => $articleDiendans,
            'articleChinhtri' => $articleChinhtri, 'articleChinhtris' => $articleChinhtris,
            'articleKinhte' => $articleKinhte, 'articleKinhtes' => $articleKinhtes,
            'articleThegioi' => $articleThegioi, 'articleThegiois' => $articleThegiois,
            'articleVntb' => $articleVntb, 'articleVntbs' => $articleVntbs,
        ]);
    }
}
