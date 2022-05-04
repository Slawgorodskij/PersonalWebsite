@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction" data-name="{{$article->id}}">
            <h2 class="introduction__text container">{{$article->title}}</h2>
        </div>

        <div class="slider">
            <button class="slider__button slider__button_left">
                <svg class="slider__button-logo" viewBox="0 0 284.935 284.936" width="24" height="24">
                    <path
                        d="M110.488,142.468L222.694,30.264c1.902-1.903,2.854-4.093,2.854-6.567c0-2.474-0.951-4.664-2.854-6.563L208.417,2.857 C206.513,0.955,204.324,0,201.856,0c-2.475,0-4.664,0.955-6.567,2.857L62.24,135.9c-1.903,1.903-2.852,4.093-2.852,6.567 c0,2.475,0.949,4.664,2.852,6.567l133.042,133.043c1.906,1.906,4.097,2.857,6.571,2.857c2.471,0,4.66-0.951,6.563-2.857 l14.277-14.267c1.902-1.903,2.851-4.094,2.851-6.57c0-2.472-0.948-4.661-2.851-6.564L110.488,142.468z"/>
                </svg>
            </button>

            <div class="slider__block slider-block slider-block__size_80">
                @foreach($images as $image)
                    <div class="slider-block__photo slider-block__photo-size_80">
                        <img class="slider-block__photo-image" src="/storage/images/{{$image->name_image}}"
                             alt="photo">
                        @isset($image->description)
                            <div class="slider-block__photo-hover">
                                <h2>{{$image->description}}</h2>
                            </div>
                        @endisset
                    </div>
                @endforeach
            </div>
            <button class="slider__button slider__button_right">
                <svg class="slider__button-logo" viewBox="0 0 792.033 792.033" width="24" height="24">
                    <path
                        d="M617.858,370.896L221.513,9.705c-13.006-12.94-34.099-12.94-47.105,0c-13.006,12.939-13.006,33.934,0,46.874 l372.447,339.438L174.441,735.454c-13.006,12.94-13.006,33.935,0,46.874s34.099,12.939,47.104,0l396.346-361.191 c6.932-6.898,9.904-16.043,9.441-25.087C627.763,386.972,624.792,377.828,617.858,370.896z"/>
                </svg>
            </button>
        </div>
<h5 class="title slider__hint">*наведи курсор на фотографию</h5>
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

