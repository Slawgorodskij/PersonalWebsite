@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>  {{ isset($article) ? ('Редактирование статьи:' . ' ' . $article->title) :  ('Создание новой статьи') }}</h3>
            </div>
        </div>

        <div class="block-form container">
            <form method="POST" enctype="multipart/form-data"
                  action="{{ isset($article) ? route('article.update', $article) : route('article.store') }}">
                @csrf

                @if(isset($article))
                    @method('PUT')
                @endif

                @if(is_int($category))
                    <input type="hidden" name="category_id" value="{{$category}}">
                @else
                    <select class="block-form__input" name="category_id">
                        <option disabled>надо выбрать категорию</option>
                        @foreach($category as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>

                @endif

                <input name="title" type="text"
                       class="block-form__input @error('title') block-form__input_error @enderror"
                       placeholder="Заголовок статьи" value="{{ $article->title ?? '' }}"/>

                @error('title')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <input name="description" type="text"
                       class="block-form__input @error('description') block-form__input_error @enderror"
                       placeholder="Короткое описание статьи"
                       value="{{ $article->description ?? '' }}"/>

                @error('description')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <textarea id="editor" name="articles_body"
                          class="block-form__input @error('articles_body') block-form__input_error @enderror"
                          placeholder="текст статьи"
                >{{ $article->articles_body ?? '' }}</textarea>

                @error('articles_body')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <button class="button admin__button" type="submit"
                        value="save">
                    Сохранить
                </button>
            </form>

            <a class="button admin__button" href="{{route('article_admin')}}">
                <span class="transition-button__text">Назад</span>
            </a>

        </div>

    </main>
@endsection

@push('scripts')
    <script>

        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

    </script>
@endpush

