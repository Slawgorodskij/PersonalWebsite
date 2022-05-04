@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>Добавление фотографии</h3>
            </div>
        </div>

        <div class="block-form container">
            <form method="POST" enctype="multipart/form-data"
                  action="{{ route('images.store') }}">
                @csrf


{{--                <input name="title" type="text"--}}
{{--                       class="block-form__input @error('title') block-form__input_error @enderror"--}}
{{--                       placeholder="Заголовок статьи">--}}

{{--                @error('title')--}}
{{--                <p class="block-form__text-error">{{ $message }}</p>--}}
{{--                @enderror--}}

                <select class="block-form__input" name="article_id">
                    <option disabled>надо выбрать статью</option>
                    @foreach($articles as $article)
                        <option value="{{$article->id}}">{{$article->title}}</option>
                    @endforeach
                </select>



                <input name="description" type="text"
                       class="block-form__input @error('description') block-form__input_error @enderror"
                       placeholder="Короткое описание фотографии"/>

                @error('description')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror


                <input class="block-form__input" type="file" name="name_image">

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

{{--@push('scripts')--}}
{{--    <script>--}}

{{--        ClassicEditor--}}
{{--            .create(document.querySelector('#editor'))--}}
{{--            .catch(error => {--}}
{{--                console.error(error);--}}
{{--            });--}}

{{--    </script>--}}
{{--@endpush--}}

