@extends('layouts.app')

@section('content')

    <main class="main">
        <div class="introduction">
            <h2 class="introduction__text container">Обо мне</h2>
        </div>

        <figure class="main-photo container">
            <div class="main-photo__block">
                <img class="main-photo__image" src="/storage/images/my.jpg" alt=""/>
            </div>

            <figcaption class="main-photo__description">
                <h2 class="main-photo__title title">Биография</h2>
                <p class="main-photo__text">Мне 42.</p>
                <!--(подумать о возможности автоматического изменения возраста). -->
                <p class="main-photo__text">Родился, живу и работаю в сибирском городе, столице Кузбасса.</p>
                <p class="main-photo__text">Женат. Образование высшее.</p>
                <p class="main-photo__text">С ноября 2020 года слушатель в GeekBrains</p>
            </figcaption>
        </figure>

        <div class="hobby container">
            <h2 class="hobby__title title">Про хобби</h2>
            <p class="hobby__title title">Мечты детства могут осуществиться если их не забывать</p>

            <div class="hobby__items">

                <div class="hobby__item">
                    <div class="hobby__text">
                        <p class="hobby__sentence text">В моей комнате на стене висела карта области, на
                            письменном столе под стеклом лежала карта России, а в
                            домашней
                            библиотеке имелся атлас автомобильных дорог</p>
                        <p class="hobby__sentence text">Я мечтал как на машине еду от одного города к
                            другому</p>
                        <p class="hobby__sentence text">Мечта сбылась!</p>
                        <p class="hobby__sentence text">Мы со Светой, моей женой, не менее одного раза в
                            год
                            совершаем путешествие на автомобиле</p>
                        <p class="hobby__sentence text">Может и не очень большой перечень посещенных нами
                            городов,
                            но города Кузбасса мы посетили.
                            Проехали до
                            Урала, были на Байкале, посмотрели на Саяно-Шушенскую ГЭС, проехали по Чуйскому тракту.</p>
                    </div>

                    <a class="hobby__link link"
                       href="{{route('category', 1)}}"
                       target="blanc"
                    >
                        Здесь более подробно -->
                    </a>

                </div>

                <div class="hobby__item">
                    <div class="hobby__text">

                        <p class="hobby__sentence text"> В школе где я учился не было компьютерного класса.
                            Для
                            получения в аттестат оценки мы посещали занятия по информатике отдельно.</p>
                        <p class="hobby__sentence text">Дома, в тетради писался код (basic), а в классе
                            переносили
                            его на ЭВМ "Электроника"</p>
                        <p class="hobby__sentence text">Оживление белого поршня на черном экране вызывало
                            восторг.
                            Как хотелось стать обладателем этого волшебного устройства.</p>
                        <p class="hobby__sentence text">Шли годы, компьютер стал неотъемлемой частью жизни.
                            Только
                            использоваться он стал не так как мечталось в детстве</p>
                        <p class="hobby__sentence text">Желание создать сайт и воспоминания детства
                            подтолкнули
                            посмотреть на компьютер не как на устройство для развлечения. Пробудили воспоминания о
                            желании
                            создавать, творить.</p>
                        <p class="hobby__sentence text">Нет, я не создаю волшебных программ, но результаты
                            проведенного за компьютером времени, можно увидеть.</p>
                    </div>

                    <a class="hobby__link link"
                       href="{{route('portfolio')}}"
                       target="blanc"
                    >
                        Здесь более подробно -->
                    </a>
                </div>
            </div>
        </div>


        <div class="boast">
            <h2 class="boast__title">Что я умею?</h2>
            <div class="boast__items container">
                <div class="boast__item">
                    <h2 class="boast__title">Frontend</h2>
                    <p class="boast__text text">знаком с версткой на HTML/CSS и основами JavaScript</p>
                    <p class="boast__text text">оценить мои знания вы можете по работе находящейся перед вами</p>
                    <p class="boast__text text">
                        сайт можно с комфортом просматривать на экране как компьютера, так и
                        мобильного телефона
                    </p>

                </div>

                <div class="boast__item">
                    <h2 class="boast__title">Backend</h2>
                    <p class="boast__text text">Изучил основы баз данных</p>
                    <p class="boast__text text">Познакомился с языком PHP и работой фреймворков</p>
                    <p class="boast__text text">
                        В частности при работе этого сайта используется MySQL, а при создании
                        Laravel
                    </p>

                </div>
            </div>
            <div class="slider container">
                <button class="slider__button slider__button_left">
                    <svg class="slider__button-logo" viewBox="0 0 284.935 284.936" width="24" height="24">
                        <path
                            d="M110.488,142.468L222.694,30.264c1.902-1.903,2.854-4.093,2.854-6.567c0-2.474-0.951-4.664-2.854-6.563L208.417,2.857 C206.513,0.955,204.324,0,201.856,0c-2.475,0-4.664,0.955-6.567,2.857L62.24,135.9c-1.903,1.903-2.852,4.093-2.852,6.567 c0,2.475,0.949,4.664,2.852,6.567l133.042,133.043c1.906,1.906,4.097,2.857,6.571,2.857c2.471,0,4.66-0.951,6.563-2.857 l14.277-14.267c1.902-1.903,2.851-4.094,2.851-6.57c0-2.472-0.948-4.661-2.851-6.564L110.488,142.468z"/>
                    </svg>
                </button>

                <div class="slider__block slider-block slider-block__size_60">
                    @foreach($images as $image)
                        <div class="slider-block__photo slider-block__photo-size_60">
                            <img class="slider-block__photo-image" src="/storage/images/{{$image->name}}"
                                 alt="photo">
                        </div>
                    @endforeach
                </div>
                <button class="slider__button slider__button_right">
                    <svg class="slider__button-logo" viewBox="0 0 792.033 792.033" width="24" height="24">
                        <path
                            d="M617.858,370.896L221.513,9.705c-13.006-12.94-34.099-12.94-47.105,0c-13.006,12.939-13.006,33.934,0,46.874 l372.447,339.438L174.441,735.454c-13.006,12.94-13.006,33.935,0,46.874s34.099,12.939,47.104,0l396.346-361.191 c6.932-6.898,9.904-16.043,9.441-25.087C627.763,386.972,624.792,377.828,617.858,370.896z"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="suggestion container">
            <div class="suggestion__item">
                <h2>У вас есть макет будущего сайта?</h2>
                <h3>Нужен "верстальщик"?</h3>
                <p>Помогу, гипертекст и каскадные стили мне знакомы.</p>
            </div>
            <div class="suggestion__item">
                <h2>У вас есть шаблон сайта?</h2>
                <h3>Нужен программист для его "оживления"?</h3>
                <p>
                    Полученые знания языка PHP и взаимодействия с базами данных позволяют
                    организовать работу на сайте, настроить хранение информации
                    своевременного отображения и без проблемной корректировки при
                    необходимости.
                </p>
            </div>
            <div class="suggestion__item">
                <h2>У вас есть только эскиз?</h2>
                <h3>Нужен полноценный сайт?</h3>
                <p>
                    Я думаю и этой беде можно помочь, то что находится перед вашими глазами
                    витало когда-то в эфире, а сейчас можно назвать материальным
                    воплощением.
                </p>
            </div>
        </div>

        <div class="main-block work">
            <img class="main-block__photo nature__photo" src="/storage/images/work.jpg" alt="nature">
            <div class="work__text">
                <h2 class="work__text_title">Интересна моя работа?</h2>
                <a class="work__text_link" href="{{route('feedback.index')}}">Нажимай для связи</a>
            </div>
        </div>
    </main>
@endsection
