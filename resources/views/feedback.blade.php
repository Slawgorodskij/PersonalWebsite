@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction">
            <h2 class="introduction__text container">{{$title}}</h2>
        </div>


        <div class="page__body container">
            <div class="mt-8">
                <form class="space-y-5 mt-5" method="POST"
                      action="{{ route('feedback.store') }}">
                    @csrf


                    <input name="name" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border-red-500 @enderror"
                           placeholder="Ваше имя"/>

                    @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="email" type="email"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror"
                           placeholder="Ваш email"/>

                    @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="phone" type="text"
                           class="w-full h-12 border border-gray-800 rounded px-3 @error('phone') border-red-500 @enderror"
                           placeholder="Номер вашего телефона"/>

                    @error('phone')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <textarea name="message"
                              class="w-full h-12 border border-gray-800 rounded px-3 @error('message') border-red-500 @enderror"
                              placeholder="текст обращения">

                    </textarea>

                    @error('message')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium"
                            value="save">
                        Отправить
                    </button>
                </form>
            </div>


    </main>
@endsection

