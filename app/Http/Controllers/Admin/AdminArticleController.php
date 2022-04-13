<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleFormRequest;
use App\Http\Requests\Admin\NewArticleFormRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
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
        return view('admin.NewArticle', [
            'category' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewArticleFormRequest $request
     * @return Response
     */
    public function store(NewArticleFormRequest $request)
    {
        Article::create($request->validated());
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.oneArticle', [
            'article' => Article::find($id),
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
     * @param ArticleFormRequest $request
     * @param Article $article
     * @return Response
     */
    public function update(ArticleFormRequest $request, Article $article)
    {
        $article->update($request->validated());
        return to_route('article.show', [$article->id]);
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

        return to_route('article.index');
    }
}
