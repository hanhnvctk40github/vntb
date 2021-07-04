<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $category = new Category;
        $categories = $category::all();
        return view('Admin.pages.category.index',['categories'=>$categories]);
    }
    
    public function addGet(){
        return view('Admin.pages.category.add');
    }

    public function addPost(Request $request){
        $category = new Category;
        $category->name = $request->name;
        if($category->save()){
            return redirect()->route("admin.category.index");
        }
        return redirect()->route("admin.category.add.get");
    }

    public function editGet($id){
        $categoryModel = new Category;
        $category = $categoryModel::findOrFail($id);
        return view('Admin.pages.category.edit',['category'=>$category]);
    }

    public function editPost(Request $request){
        $categoryModel = new Category;
        $category = $categoryModel::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route("admin.category.index");
    }

    public function delete($id){
        $categoryModel = new Category;
        $category = $categoryModel::findOrFail($id);
        $category->delete();
        return redirect()->route("admin.category.index");
    }
}