@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="performance">
            <div class="container">
                <h1 class="performance__title">Для <span class="performance__span">жизни</span> нужно движение, сделай
                    первый шаг</h1>
            </div>
        </div>

        <div class="about container wrapper">
            <div class="about__block about__photo">
                <img class="about__photo-image" src="/storage/images/my.jpg" alt="photo">
            </div>
            <div class="about__block about__description">
                <h2>Здравствуйте.</h2>
                <div>
                    <h3>Меня зовут Владимир.</h3>
                    <p> Вокруг нас всегда происходит много интереснного, но мы не всегда обращаем на это внимание.
                        Иногда заняты, иногда нет настроения, иногда нет возможности.
                        Желание поделиться увиденным и накопленным подтолкнуло к созданию своего сайта.
                    </p>
                </div>

                <a href="#">Нажми, что бы узнать обо мне</a>
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
                    <img class="presentation__photo" src="/storage/images/{{$article->image[0]['name_image']}}"
                         alt="photo">
                    <div class="presentation__hover">
                        <a class="presentation__hover_link" href="{{route('article', $article->id)}}">
                            <h2>{{$article->title}}</h2>
                            <h3>{{$article->description}}</h3>
                            <p>от перехода отделяет один клик мышкой</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="main-block work">
            <img class="main-block__photo nature__photo" src="/storage/images/work.jpg" alt="nature">
            <div class="work__text">
                <h2 class="work__text_title">Интересна моя работа?</h2>
                <a href="#">Нажимай для связи</a>
            </div>
        </div>
    </main>
@endsection
