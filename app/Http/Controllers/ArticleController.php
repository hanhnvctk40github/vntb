<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function detail($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}