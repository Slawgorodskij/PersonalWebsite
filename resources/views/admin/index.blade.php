@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>Главная</h3>
            </div>
        </div>

        <div class="container">
            <div>
                <p>Переход к редактированию статей</p>
                <a href="{{ route('article.index') }}" >
                    <span >Страница редактирования статей</span>
                </a>
            </div>
        </div>

    </main>

@endsection
