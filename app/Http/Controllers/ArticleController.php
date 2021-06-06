<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(){
        $article = new Article;
        $articles = $article::all();
        return view('Admin.pages.article.index',['articles'=>$articles]);
    }
    
    public function addGet(){
        return view('Admin.pages.article.add');
    }

    public function addPost(Request $request){
        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        if ($request->hasfile('background_image')) {
            $fileName = time().$request->file('background_image')->getClientOriginalName();
            $request->file('background_image')->move(public_path('/assets/upload/article'), $fileName);
            $article->background_image = $fileName;
        } 
        $article->save();
        return redirect()->route("admin.article.index");
    }

    public function editGet($id){
        $articleModel = new Article;
        $article = $articleModel::findOrFail($id);
        return view('Admin.pages.article.edit',['article'=>$article]);
    }

    public function editPost(Request $request){
        $articleModel = new Article;
        $article = $articleModel::findOrFail($request->id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        if ($request->hasfile('background_image')) {
            $fileName = time().$request->file('background_image')->getClientOriginalName();
            $request->file('background_image')->move(public_path('/assets/upload/article'), $fileName);
            $article->background_image = $fileName;
        }
        $article->save();
        return redirect()->route("admin.article.index");
    }

    public function delete($id){
        $articleModel = new Article;
        $article = $articleModel::findOrFail($id);
        $article->delete();
        unlink("/assets/upload/article/".$article->background_image);
        return redirect()->route("admin.article.index");
    }

    public function upload(Request $request){
        $fileName = time().'_content_'.$request->file('upload')->getClientOriginalName();
        $request->file('upload')->move(public_path('/assets/upload/article'), $fileName);
        $url = env("APP_URL");
        $filePath = "$url/public/assets/upload/article/" . $fileName;
        return view('Admin.pages.article.upload', [
            'CKEditorFuncNum' => $request->CKEditorFuncNum,
            'data' => [
                'url' => $filePath,
                'message' => 'Success',
            ],
        ]);
    }
}