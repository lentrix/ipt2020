<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::orderBy('category')->get();
        return view('categories.index', ['categories'=>$categories]);
    }
}
