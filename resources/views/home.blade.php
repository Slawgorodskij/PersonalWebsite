@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="performance">
            <div class="container">
                <h1 class="performance__title">Для <span class="performance__span">жизни</span> нужно движение.</h1>
                <h2 class="performance__title">"Сделай шаг, и дорога появится, сама собой."</h2>
                <p class="performance__author">(Стив Джобс)</p>

            </div>
        </div>

        <div class="about container wrapper">
            <div class="about__block about__photo">
                <img class="about__photo-image" src="/storage/images/my.jpg" alt="photo">
            </div>
            <div class="about__block about__description">

                <div>
                    <h2>Здравствуйте.</h2>
                    <h3>Меня зовут Владимир.</h3>
                    <p class="about__text text"> Вокруг нас всегда происходит много интересного, но мы не всегда обращаем на
                        это внимание.</p>
                    <p class="about__text text"> Иногда заняты, иногда нет настроения, иногда нет возможности. </p>
                    <p class="about__text text"> Желание поделиться увиденным и накопленными впечатлениями подтолкнуло к
                        созданию своего сайта.</p>
                    <p class="about__text text"> Шаг, сделанный для достижения поставленной цели (создания сайта), открыл для
                        меня новый мир web разработки. Подтверждая приведенные выше слова Стива Джобса</p>
                </div>

                <a class="about__link" href="{{route('about')}}">Нажми, что бы узнать обо мне --></a>
            </div>
        </div>

        <div class="main-block nature">
            <img class="main-block__photo nature__photo" src="/storage/images/nature.jpg" alt="nature">
            <div class="nature__text">
                <h2 class="nature__text_m0">Красотами нашей <span>Родины</span> можно любоваться бесконечно</h2>
            </div>
        </div>

        <div class="presentation container wrapper">
            @foreach($articles as $article)
                <div class="presentation__item">
                    @isset($article->image[0])
                        <img class="presentation__photo" src="/storage/images/{{$article->image[0]['name_image']}}"
                             alt="photo">
                    @endisset
                    <div class="presentation__hover">
                        <a class="presentation__hover_link" href="{{route('article', $article->id)}}">
                            <h2>{{$article->title}}</h2>
                            <h3>{{$article->description}}</h3>
                            <p>от перехода отделяет один клик</p>
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
