<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
        $userId = auth()->user()->id;
        $data['categories'] = Category::where('user_id', $userId)->get();

        return view('category.home', $data);
    }

    public function create(Request $request){
        return view('category.create');
    }

    public function createAction(Request $request){
        $userId = auth()->user()->id;
        $category = $request->only(['title', 'color']);
        $category['user_id'] = $userId;

        $categoryDb = Category::create($category);
        return redirect(route('category.view'));
    }

    public function edit(Request $request){
        $category = Category::find($request->id);
        
        return view('category/edit', ['category' => $category]);
    }

    public function editAction(Request $request){
        $data = $request->only(['id', 'color', 'title']);
        
        if(!$data){
            return "Erro de Categoria";
        }
        $taskDb = Category::where('id', '=', $request->id)->update($data);
        return redirect(route('category.view'));
    }

    public function delete(Request $request){
        $categoryDb = Category::where('id', '=', $request->id)->delete();
        return redirect(route('category.view'));
    }
}
