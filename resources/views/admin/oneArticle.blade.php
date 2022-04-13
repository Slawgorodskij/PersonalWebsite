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

            <div>

                <h2>{{ $article->title }}</h2>
                <h3>{{ $article->description }}</h3>
                <p>{{ $article->articles_body }}</p>

            </div>
            <form action="{{route('article.destroy', $article)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">удаления статьи</button>
            </form>

            <form action="{{route('article.edit', $article)}}" method="GET">
                @csrf
                <button type="submit">кнопка редактирования статьи</button>
            </form>


            <div>кнопка возвращения на страницу новостей</div>
        </div>

    </main>
    {{--    {{route('article.show', $article->id)}}--}}
@endsection
