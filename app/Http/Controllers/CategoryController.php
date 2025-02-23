<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('.create', compact('categories'));
    }
}
