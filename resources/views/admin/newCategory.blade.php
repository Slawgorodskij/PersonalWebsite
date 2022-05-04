@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>  {{ isset($category) ? ('Редактирование раздела:' . ' ' . $category->title) :  ('Создание нового раздела') }}</h3>
            </div>
        </div>

        <div class="block-form container">

            <form method="POST"
                  action="{{ isset($category) ? route('category.update', $category) : route('category.store') }}">
                @csrf

                @if(isset($category))
                    @method('PUT')
                @endif

                <input name="title" type="text"
                       class="block-form__input @error('title') block-form__input_error @enderror"
                       placeholder="Заголовок статьи" value="{{ $category->title ?? '' }}"/>

                @error('title')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <button type="submit" class="button admin__button"
                        value="save">
                    Сохранить
                </button>
            </form>

            <a class="button admin__button" href="{{route('category_admin')}}">
                <span class="transition-button__text">Назад</span>
            </a>
        </div>

    </main>

@endsection



