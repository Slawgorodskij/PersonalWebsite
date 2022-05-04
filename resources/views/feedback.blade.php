@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction">
            <h2 class="introduction__text container">{{$title}}</h2>
        </div>
        @if(session('success'))
            <div class="container notice">
                {{session('success')}}
            </div>
        @endif
        <div class="block-form container">
            <form method="POST" action="{{ route('feedback.store') }}">
                @csrf

                <input name="name" type="text"
                       class="block-form__input @error('name') block-form__input_error @enderror"
                       placeholder="Ваше имя*"/>

                @error('name')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <input name="email" type="email"
                       class="block-form__input @error('email') block-form__input_error @enderror"
                       placeholder="Ваш email*"/>

                @error('email')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <input name="phone" type="text"
                       class="block-form__input @error('phone') block-form__input_error @enderror"
                       placeholder="Номер вашего телефона"/>

                @error('phone')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <textarea name="message"
                          class="block-form__input @error('message') block-form__input_error @enderror"
                          placeholder="текст обращения*">
                    </textarea>

                @error('message')
                <p class="block-form__text-error">{{ $message }}</p>
                @enderror

                <button class="button admin__button" type="submit"
                        value="save">
                    <span class="transition-button__text"> Отправить</span>

                </button>
            </form>
        </div>


    </main>
@endsection

