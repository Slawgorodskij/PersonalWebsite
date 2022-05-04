<header class="header">
    <div class="container header__logo">
        <a href="{{route('home')}}">
            <img class="header__images" src="/storage/images/logo.png" alt="logo">
        </a>

        <nav class="header__menu">
            @include('templates.menu')
        </nav>
        <div class="header__burger">
            <span class="header__burger_line"></span>
        </div>
        <div class="none-block">

            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="header__list" href="{{ route('login') }}">Войти</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="header__list" href="{{ route('register') }}">Зарегистрироваться</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle header__list" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        </div>
    </div>

    <nav class="header__menu_mobile header__menu_inactive">
        @include('templates.menu')
    </nav>
</header>
