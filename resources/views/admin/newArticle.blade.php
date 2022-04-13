@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>  {{ isset($article) ? ('Редактирование статьи:' . ' ' . $article->title) :  ('Создание новой статьи') }}</h3>
            </div>
        </div>

        <div class="page__body container">
            <div class="mt-8">
                <form class="space-y-5 mt-5" method="POST"
                      action="{{ isset($article) ? route('article.update', $article) : route('article.store') }}">
                    @csrf

                    @if(isset($article))
                        @method('PUT')
                    @endif

                    @if(is_int($category))
                        <input type="hidden" name="category_id" value="{{$category}}">
                    @else
                        <select name="category_id" class="w-full h-12 border border-gray-800 rounded px-3">
                            <option disabled>надо выбрать категорию</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>

                    @endif

                    <input name="title" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror"
                           placeholder="Заголовок статьи" value="{{ $article->title ?? '' }}"/>

                    @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="description" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror"
                           placeholder="Короткое описание статьи"
                           value="{{ $article->description ?? '' }}"/>

                    @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <textarea name="articles_body"
                              class="w-full h-12 border border-gray-800 rounded px-3 @error('articles_body') border-red-500 @enderror"
                              placeholder="текст статьи"
                    >{{ $article->articles_body ?? '' }}</textarea>

                    @error('articles_body')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium"
                            value="save">
                        Сохранить
                    </button>
                </form>
            </div>

{{--                    <div class="transition">--}}
            {{--                        <a href="{{$route}}" class="transition-button">--}}
            {{--                            <span class="transition-button__text">{{$title_button}}</span>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
                </div>

    </main>
    {{--    {{route('article', $article->id)}}--}}
@endsection
