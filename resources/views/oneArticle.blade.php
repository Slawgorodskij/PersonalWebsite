@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction">
            <h2 class="introduction__text container">{{$article->title}}</h2>
        </div>
        <div class="container">
            <div>
                <div class="presentation container wrapper">
                    @foreach($images as $image)
                        <div class="presentation__item">
                            <img class="presentation__photo" src="/storage/images/{{$image->name_image}}" alt="photo">
                        </div>
                    @endforeach
                </div>
            </div>

            <h3>{{$article->description}}</h3>
            {!! $article->articles_body !!}
        </div>

    </main>
@endsection
