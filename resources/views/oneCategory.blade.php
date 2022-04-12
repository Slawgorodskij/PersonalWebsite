@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction">
            <h2 class="introduction__text container">{{$title}}</h2>
        </div>
        <section class="articles container">
            @foreach($articles as $article)
                <a href="{{route('article', $article->id)}}">
                    <div class="article">
                        <div class="article__item article__photo">
                            <img class="article__photo_img" src="/storage/images/{{$article->image[0]['name_image']}}" alt="">
                        </div>
                        <div class="article__item article__text">
                            <h2>{{$article->title}}</h2>
                            <p>{{$article->description}}</p>
                        </div>
                    </div>
                </a>

            @endforeach
        </section>
    </main>
@endsection
