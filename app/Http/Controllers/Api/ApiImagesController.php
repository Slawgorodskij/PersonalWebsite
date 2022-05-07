<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ApiImagesController extends Controller
{
    public function index($id)
    {
        $article = Article::find($id);
        return response()->json($article->image);
    }
}
