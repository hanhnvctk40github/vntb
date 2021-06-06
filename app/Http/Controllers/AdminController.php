<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login_index(){
        return view('Login.login');
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $admin = new Admin;
        $admin = $admin::all();
        foreach ($admin as $value) {
            if($value->username == $username && $value->password == $password){
                $userSession = array('id' => $value->id, 'username' => $value->username);
                Session::put('user', $userSession);
                Session::save();
                return redirect('admin/article');
            }
        }
        return view('Login.login');
    }

    public function logout(){
        $user = null;
        $user = Session::get('user');
        if($user){
            Session::put('user', null);
            Session::save();
            return view('Login.login');
        }
        return view('Login.login');
    }
}