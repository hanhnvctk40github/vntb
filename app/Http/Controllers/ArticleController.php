<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\InfoService;
use App\Models\Category;

class ArticleController extends Controller
{
    protected $infoService;
    public function __construct(InfoService $infoService)
    {
        $this->infoService = $infoService;
    }

    public function detail($id)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $resultSaveInfo = $this->infoService->saveInfo($ip, $user_agent, $id);
        $article = Article::display()->findOrFail($id);
        $title = $article->title;
        $mostReadArticles = Article::display()->get()->sortByDesc('created_at')->take(20);
        return view('detail', ['article' => $article, 'title' => $title, 'mostReadArticles' => $mostReadArticles]);
    }

    public function index()
    {
        $article = new Article;
        $articles = $article::all()->sortBy('id_category');
        $category = new Category;
        $categories = $category::all();
        return view('Admin.pages.article.index', ['articles' => $articles, 'categories' => $categories]);
    }

    public function addGet()
    {
        $category = new Category;
        $categories = $category::all();
        return view('Admin.pages.article.add', ['categories' => $categories]);
    }

    public function addPost(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->id_category = $request->categoryId;
        $article->status_button_register = $request->btnRegister;
        $toSlug = $this->infoService->toSlug($request->title);
        $create_slug = $this->infoService->create_slug($toSlug);
        $article->seo_title = $create_slug;
        if ($request->hasfile('background_image')) {
            $fileName = time() . $request->file('background_image')->getClientOriginalName();
            $request->file('background_image')->move(public_path('/assets/upload/article'), $fileName);
            $article->background_image = $fileName;
        }
        $article->save();
        return redirect()->route("admin.article.index");
    }

    public function editGet($id)
    {
        $category = new Category;
        $categories = $category::all();
        $articleModel = new Article;
        $article = $articleModel::findOrFail($id);
        return view('Admin.pages.article.edit', ['article' => $article, 'categories' => $categories]);
    }

    public function editPost(Request $request)
    {
        $articleModel = new Article;
        $article = $articleModel::findOrFail($request->id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->id_category = $request->categoryId;
        $article->status_button_register = $request->btnRegister;
        if ($request->hasfile('background_image')) {
            $fileName = time() . $request->file('background_image')->getClientOriginalName();
            $request->file('background_image')->move(public_path('/assets/upload/article'), $fileName);
            $article->background_image = $fileName;
        }
        $article->save();
        return redirect()->route("admin.article.index");
    }

    public function delete($id)
    {
        $articleModel = new Article;
        $article = $articleModel::findOrFail($id);
        $article->delete();
        if (file_exists("/assets/upload/article/" . $article->background_image)) {
            unlink("/assets/upload/article/" . $article->background_image);
        }
        return redirect()->route("admin.article.index");
    }
    public function bulkDelete(Request $request)
    {
        foreach ($request->listId as $id) {
            $articleModel = new Article;
            $article = $articleModel::findOrFail($id);
            $article->delete();
            if (file_exists("/assets/upload/article/" . $article->background_image)) {
                unlink("/assets/upload/article/" . $article->background_image);
            }
        }
        return [
            'success' => true,
            'message' => 'Thành công',
        ];
    }

    public function hidePost(Request $request)
    {
        $articleModel = new Article;
        $article = $articleModel::findOrFail($request->id);
        $article->is_display = !$article->is_display;
        $article->save();
        return [
            'success' => true,
            'message' => 'Thành công',
        ];
    }

    public function upload(Request $request)
    {
        $fileName = time() . '_content_' . $request->file('upload')->getClientOriginalName();
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