@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>Список статей</h3>
            </div>
        </div>

        <div class="container">

            <a href="{{route('article.create')}}">кнопка создания новой статьи</a>
            @foreach($articles as $article)
                <div>
                    <a href="{{route('article.show', $article->id)}}">
                        <h2>{{$article->title}}</h2>
                        <h3>{{$article->description}}</h3>
                    </a>
                </div>
            @endforeach
        </div>

    </main>

@endsection
