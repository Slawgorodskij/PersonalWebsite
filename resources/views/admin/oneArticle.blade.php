@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>Просмотр статьи {{ $article->title }}</h3>
            </div>
        </div>

        <div class="container">

            <p> Фотографии статьи: </p>
            <div class="presentation container wrapper">
                @isset($images)
                    @foreach($images as $image)
                        <div class="presentation__item">
                            <img class="presentation__photo" src="/storage/images/{{$image->name_image}}" alt="photo">
                            <div class="presentation__hover">
                                    <h3>{{$image->description}}</h3>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>

            <h2>Заголовок статьи: {{ $article->title }}</h2>
            <h3>Описание статьи: {{ $article->description }}</h3>
            <p> Текст статьи: </p>
            {!! $article->articles_body !!}

            <form action="{{route('article.edit', $article)}}" method="GET">
                @csrf
                <button class="button admin__button" type="submit">
                    <span class="transition-button__text">Перейти к редактированию статьи</span>
                </button>
            </form>

            <form action="{{route('images.create')}}" method="GET">
                @csrf
                <button class="button admin__button" type="submit">
                    <span class="transition-button__text">Перейти к добавлению фотографии</span>
                </button>
            </form>

            <form action="{{route('article.destroy', $article)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="button admin__button" type="submit">
                    <span class="transition-button__text">Удалить статью</span>
                </button>
            </form>

            <a class="button admin__button" href="{{route('article.create')}}">
                <span class="transition-button__text">Создать еще одну статью</span>
            </a>

            <a class="button admin__button" href="{{route('article_admin')}}">
                <span class="transition-button__text">Назад на главную страницу</span>
            </a>
        </div>

    </main>

@endsection
