<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function index()
    {
        $feedback = Feedback::simplePaginate(10);

        return view('admin.index', [
            'array_data' => $feedback,
            'button_name' => 'Показать',
            'name_page' => 'Обращения',
            'action_button' => 'reviews.show',
            'delete_button' => 'reviews.destroy',
        ]);
    }

    public function article()
    {
        $article = Article::simplePaginate(10);
        return view('admin.index', [
            'array_data' => $article,
            'button_name' => 'Редактировать',
            'name_page' => 'Статьи',
            'add_button' => 'Добавить статью',
            'image_button' => 'Добавить фотографию',
            'action_button' => 'article.edit',
            'delete_button' => 'article.destroy',
            'add_elem' => route('article.create'),
        ]);
    }

    public function category()
    {
        $category = Category::simplePaginate(10);
        return view('admin.index', [
            'array_data' => $category,
            'button_name' => 'Редактировать',
            'name_page' => 'Разделы',
            'add_button' => 'Добавить раздел',
            'action_button' => 'category.edit',
            'delete_button' => 'category.destroy',
            'add_elem' => route('category.create'),
        ]);
    }
}
