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

            <figcaption class="main-photo__items">
                <div class="main-photo__item">
                    <h2>Биография</h2>
                    <p>Мне 42.</p>
                    <!--Расскажу немного о себе.
                                  (подумать о возможности автоматического
                                изменения возраста).
                                  -->
                    <p>Женат. Образование высшее.</p>
                    <p>Родился, живу и работаю в сибирском городе, столице Кузбасса.</p>
                    <p>Хобби: путешествия и программирование (создание веб-сайтов).</p>
                </div>
                <div class="main-photo__item">
                    <h2>Про меня</h2>
                    <p>
                        Считаю,что нельзя стоять на месте. Движение не даст заскучать, толкает
                        к общению, развитию и познанию. Знакомство с веб-технологиями
                        позволило реализовать мечту к творчеству.
                    </p>
                    <a
                        href="https://github.com/Slawgorodskij?tab=repositories"
                        target="blanc"
                    >
                        <img src="/storage/images/github.png" alt="" width="50" height="50"/>
                    </a>
                </div>
            </figcaption>
        </figure>

        <div class="boast">
            <h2 class="boast__title">Что я умею?</h2>
            <div class="boast__items container">
                <div class="boast__item">
                    <h2 class="boast__title">Frontend</h2>
                    <p>знаком с версткой на HTML/CSS и основами JavaScript</p>
                    <p>оценить мои знания вы можете по работе находящейся перед вами</p>
                    <p>
                        сайт можно с комфортом просматривать на экране как компьютера, так и
                        мобильного телефона
                    </p>
                    <div>
                        <a href="https://gb.ru/go/jlDfLu" target="blanck">
                            <img src="/storage/images/1.jpg" alt="" height="100" width="100"/>
                        </a>
                        <a href="#" target="blanck">
                            <img src="/storage/images/2.jpg" alt="" height="100" width="100"/>
                        </a>
                        <a href="#" target="blanck">
                            <img src="/storage/images/3.jpg" alt="" height="100" width="100"/>
                        </a>
                        <a href="#" target="blanck">
                            <img src="/storage/images/4.jpg" alt="" height="100" width="100"/>
                        </a>
                    </div>
                </div>

                <div class="boast__item">
                    <h2 class="boast__title">Backend</h2>
                    <p>Изучил основы баз данных</p>
                    <p>Познакомился с языком PHP и работой фреймворков</p>
                    <p>
                        В частности при работе этого сайта используется MySQL, а при создании
                        Laravel
                    </p>
                    <div>
                        <a href="#" target="blanck">
                            <img src="/storage/images/5.jpg" alt="" height="100" width="100"/>
                        </a>
                        <a href="#" target="blanck">
                            <img src="/storage/images/6.jpg" alt="" height="100" width="100"/>
                        </a>
                        <a href="#" target="blanck">
                            <img src="/storage/images/7.jpg" alt="" height="100" width="100"/>
                        </a>
                        <a href="#" target="blanck">
                            <img src="/storage/images/8.jpg" alt="" height="100" width="100"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="suggestion container">
            <div class="suggestion__item">
                <h2>У вас есть макет будущего сайта?</h2>
                <h3>Нужен "верстальщик"?</h3>
                <p>Помогу, гипертекст и каскадные стили мне знакомы.</p>
                <p>
                    Помогу и заставить двигаться элементы для привлечения внимания, не
                    привлекая обилие сторонних библиотек.
                </p>
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
                <a href="#">Нажимай для связи</a>
            </div>
        </div>
    </main>
@endsection
