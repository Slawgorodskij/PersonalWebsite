<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'articles' => Article::with('image')
                ->orderByDesc('created_at')
                ->take(4)
                ->get(),
        ]);
    }
}
