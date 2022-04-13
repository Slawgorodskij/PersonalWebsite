<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function oneArticle($articleId)
    {
        $article = Article::find($articleId);

        return view('oneArticle',[
            'article'=>$article,
            'images'=>$article->image,
        ]);
    }
}
