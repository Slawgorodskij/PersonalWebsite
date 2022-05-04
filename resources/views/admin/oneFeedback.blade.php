@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>Просмотр отзыва {{ $feedback->name }}</h3>
            </div>
        </div>

        <div class="container">

            <h2>Обратился: {{ $feedback->name }}</h2>
            <h3>Электронная почта: {{ $feedback->email }}</h3>
            <h3>Телефон: {{ $feedback->phone }}</h3>
            <p>Текст обращения: {{ $feedback->message }}</p>

            <a class="button admin__button" href="{{route('home_admin')}}">
                <span class="transition-button__text">Назад</span>
            </a>
        </div>

    </main>
@endsection
