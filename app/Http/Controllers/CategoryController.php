<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('sistema.categories',compact('categories'));
    }
    public function store(){
        //$category = Category::create(['nombre'=>'Electrisita','status'=>true]);
        $category = new Category();
        $category->nombre= 'plomero';
        $category->status = true;
        $category->save();
        return redirect(url('categories-list'));
    }

    public function update(){
        $category = Category::find(1);
        // $category->update(['nombre'=>'Karen']);

        $category->nombre= 'Yulier';
        $category->status = false;
        $category->save();

        return redirect(url('categories-list'));
    }

    public function destroy() {
        // $category = Category::find(7);
        // $category->delete(); 
        Category::destroy(5);
        return redirect(url('categories-list'));
    }
    
}
