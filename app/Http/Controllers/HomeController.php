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

    public function index(){
        $ip             = $_SERVER['REMOTE_ADDR']; 
        $user_agent     = $_SERVER['HTTP_USER_AGENT'];
        $resultSaveInfo = $this->infoService->saveInfo($ip, $user_agent);

        // test create link than thien [
        $text = 'Người con gái của thơi đại là người con gái như thế nào';
        $x = $this->infoService->toSlug($text);
        $string = $this->infoService->create_slug($x);
        var_dump( $string); die();
        // test create link than thien ]

        $article = Article::all()->first();
        $articles = Article::all()->take(3);
        return view('index',['articles'=>$articles,'article'=>$article]);
    }
}