@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction">
            <h2 class="introduction__text container">Портфолио</h2>
        </div>

        <div class="portfolio container">
            @foreach($samples as $sample)
                <div class="portfolio__item">
                    <img class="portfolio__photo" src="/storage/images/{{$sample->image}}" alt="">
                    <div class="portfolio__hover">
                        <h2>{{$sample->title}}</h2>
                        <p>{{$sample->description}}</p>
                        <a class="portfolio__link" href="{{$sample->link_git}}" target="_blank">
                            <img src="/storage/images/github.png" height="50" width="50" alt="">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="main-block work">
            <img class="main-block__photo nature__photo" src="/storage/images/work.jpg" alt="nature">
            <div class="work__text">
                <h2 class="work__text_title">Интересна моя работа?</h2>
                <a class="work__text_link" href="{{route('feedback.index')}}">Нажимай для связи</a>
            </div>
        </div>
    </main>
@endsection
