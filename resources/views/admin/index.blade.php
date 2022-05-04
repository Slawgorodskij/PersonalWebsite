@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="admin-performance">
            <div class="admin-performance__block container">
                <h2>Страница администратора</h2>
                <h3>{{$name_page}}</h3>
            </div>
        </div>

        <div class="admin-main container">

            <nav class="admin-nav">
                <a class="admin-nav__text" href="{{route('home_admin')}}"> Обращения </a>
                <a class="admin-nav__text" href="{{route('article_admin')}}"> Статьи </a>
                <a class="admin-nav__text" href="{{route('category_admin')}}"> Разделы </a>
            </nav>

            <table class="admin-table">
                <thead>
                <tr>
                    <th class="admin-table__content">Содержание</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($array_data as $data)
                    <tr>
                        <td>{{ $data->message??$data->description??$data->title}}</td>
                        <td class="admin-table__block-button">

                            <a class="button admin-table__button" href="{{route($action_button, $data)}}">
                                {{$button_name}}
                            </a>

                            <form action="{{route($delete_button, $data)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="button admin-table__button" type="submit">Удалить</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ $array_data->links() }}

            @isset($add_button)
                <div class="button admin__button">
                    <a class="admin__button_text" href="{{$add_elem}}">
                        {{$add_button}}
                    </a>
                </div>
            @endisset

            @isset($image_button)
                <div class="button admin__button">
                    <a class="admin__button_text" href="{{route('images.create')}}">
                        {{$image_button}}
                    </a>
                </div>
            @endisset

        </div>

    </main>

@endsection
