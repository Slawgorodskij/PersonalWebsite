@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction" data-name="{{$article->id}}">
            <h2 class="introduction__text container">{{$article->title}}</h2>
        </div>

        <images id="{{ $article->id }}"></images>

        <div class="container">

            <div class="article-body">
                {!! $article->articles_body !!}
            </div>

            <a class="button admin__button" href="{{route('category', $category)}}">
                <span class="transition-button__text">Назад</span>
            </a>

        </div>

    </main>
@endsection

