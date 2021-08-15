<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Services\InfoService;

class InfoController extends Controller
{
    protected $infoService;
    public function __construct(InfoService $infoService)
    {
        $this->infoService =  $infoService;
    }

    public function index(){
        $infos =  $this->infoService->getListInfo();
        // var_dump($infos); die();

        return view('Admin.pages.info.index',['infos'=>$infos]);
    }

    public function delete($id){
        $this->infoService->delete($id);
        return redirect('/admin/info');
    }

}
