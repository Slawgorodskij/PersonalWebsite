<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleUpdateFormRequest;
use App\Http\Requests\Admin\ImageFormRequest;
use App\Http\Requests\Admin\ArticleFormRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Response;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.articles', [
            'articles' => Article::with('image')
                ->orderByDesc('created_at')
                ->get(),
        ]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.newArticle', [
            'category' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleFormRequest $request
     * @return Response
     */
    public function store(ArticleFormRequest $request)
    {
        $article = Article::create($request->validated());

        return to_route('article.show', $article);
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return Response
     */
    public function show(Article $article)
    {
        return view('admin.oneArticle', [
            'article' => $article,
            'images' => $article->image,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('admin.newArticle', [
            'article' => $article,
            'category' => $article->category->id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleUpdateFormRequest $request
     * @param Article $article
     * @return Response
     */
    public function update(ArticleUpdateFormRequest $request, Article $article)
    {
        $article->update($request->validated());
        return to_route('article.show', $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return to_route('article_admin');
    }
}
