<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function oneArticle($articleId)
    {
        $article = Article::find($articleId);
//dd($article->image,);
        return view('oneArticle', [
            'article' => $article,
            'images' => $article->image,
            'category' => $article->category->id,
        ]);
    }


}
