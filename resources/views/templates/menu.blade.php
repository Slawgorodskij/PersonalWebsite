<a class="header__list" href="{{route('about')}}">Обо мне</a>
<a class="header__list" href="{{route('portfolio')}}">Работы</a>
@foreach($categories_for_menu as $category)
    <a class="header__list" href="{{route('category', $category->id)}}">{{$category->title}}</a>
@endforeach
<a class="header__list" href="{{route('feedback.index')}}">Обратная связь</a>
@if (Auth::user() && Auth::user()->hasRole('admin'))
    <a class="header__list" href="{{ route('home_admin') }}">Админ</a>
@endif
