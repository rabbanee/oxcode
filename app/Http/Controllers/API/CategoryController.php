<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->successWithKey(CategoryResource::collection($categories), 'categories');
    }

    public function popular()
    {
        $categories = Category::where('popular', true)->get();
        return response()->successWithKey(CategoryResource::collection($categories), 'categories');
    }
}
