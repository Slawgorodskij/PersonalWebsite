<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function oneCategory($categoryId)
    {
        $article = Article::with('image')
            ->where('category_id', $categoryId)
            ->get();
        return view('oneCategory', [
            'title' => Category::find($categoryId)->title,
            'articles' => $article,
        ]);
    }
}
