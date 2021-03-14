<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Портфолио web-разработчика | Niyaz-Developer</title>

<link rel="icon" href="http://faviconka.ru/ico/faviconka_ru_1083.png" type="image/x-icon" />

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="{{ asset('/css/style.css') }}" rel="stylesheet"/>


<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">

</head>


<div class="col-md-12" style="display: flex;justify-content: center;">
    @if (session('success'))
        <div style="text-shadow: 1px 1px 2px black, 0 0 1em red;position: absolute;margin-top: 12%;color: white;z-index: 99999;font-size: 250%;" class="col-md-5">
            {{ session('success') }}
        </div>
    @endif  
</div>

<section class="home" id="home">
    <div class="home-overlay"></div>
    <div class="heading">
        <p class="heading-beginning">Здравствуйте! Меня зовут Ниязбек и я</p>
        <h1>Web Developer</h1>
        <p class="heading-end">полный решимости выполнить Ваш заказ</p>
    </div>
    <div class="arrow-bottom">
        <a href="#header" class="anchor"><i class="fa fa-angle-down"></i></a>
    </div>
</section>

<header id="header">
    <div class="header-container col-12 col-sm-12 col-md-11 col-lg-10">
        <div class="header-logo">
            <a href="#home" class="anchor">Niyaz Developer</a>
        </div>
        <nav class="header-menu horizontal-menu">
            <ul>
                <li class="link-home"><a href="https://ai-development.ru/blog"><i class="fa fa-home"></i>Блог</a></li>
                <li class="link-services"><a class="anchor" href="#services"><i class="fa fa-files-o"></i>Услуги</a></li>
                <li class="link-portfolio"><a class="anchor" href="#portfolio"><i class="fa fa-book"></i>Портфолио</a></li>
                <li class="link-skills"><a class="anchor" href="#skills"><i class="fa fa-star"></i>Навыки</a></li>
                <li class="link-about"><a class="anchor" href="#about"><i class="fa fa-street-view"></i>Обо мне</a></li>
                <li class="link-contact"><a class="anchor" href="#contact"><i class="fa fa-envelope-open"></i>Связаться со мной</a></li>
                <li class="link-contact">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <li>
                        @if(Auth::user()->role == 1)
                        <a href="/admin">Админ панель</a>
                        @endif
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Выход
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
                </li>
            </ul>
        </nav>

        <div class="menu-toggler">
            <i class="fa fa-bars"></i>
        </div>
    </div>

    <nav class="header-menu vertical-menu">
        <ul>
            <li class="link-home"><a href="https://ai-development.ru/blog"><i class="fa fa-home"></i>Блог</a></li>
            <li class="link-services"><a class="anchor" href="#services"><i class="fa fa-files-o"></i>Услуги</a></li>
            <li class="link-portfolio"><a class="anchor" href="#portfolio"><i class="fa fa-book"></i>Портфолио</a></li>
            <li class="link-skills"><a class="anchor" href="#skills"><i class="fa fa-star"></i>Навыки</a></li>
            <li class="link-about"><a class="anchor" href="#about"><i class="fa fa-street-view"></i>Обо мне</a></li>
            <li class="link-contact"><a class="anchor" href="#contact"><i class="fa fa-envelope-open"></i>Связаться со мной</a></li>
            <li class="link-contact">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Выход
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
            </li>            
        </ul>
    </nav>
</header>

<main>
    <section id="services" class="col-12 col-sm-12 col-md-12 col-lg-10">
        <h2>Чем я занимаюсь</h2>
        <div class="underline"></div>
        <div class="services-container">
            <div class="services-frontend services-item animatedIn toFadeInLeft col-md-5">
                <div class="images">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3 class="services-title">
                    Frontend
                </h3>
                <p class="services-description">
                    Вёрстка красивых и современных веб-страниц с полной адаптивностью
                    под любые устройства и полноценной интерактивностью
                    как из PSD-макета, так и без него.
                </p>
            </div>
            <div class="services-backend services-item animatedIn col-md-5">
                <div class="images">
                    <i class="fa fa-cog"></i>
                </div>
                <h3 class="services-title">
                    Backend
                </h3>
                <p class="services-description">
                    Разработка backend логики для уже готового frontend'а,
                    либо по подробному техническому заданию с обеспечением максимальной
                    эффективности и производительности.
                </p>
            </div>
            <div class="services-fullstack services-item animatedIn col-md-5">
                <div class="images">
                    <i class="fa fa-laptop"></i>
                    <i class="fa fa-cogs"></i>
                </div>
                <h3 class="services-title">
                    Full stack
                </h3>
                <p class="services-description">
                    Создание полноценных сайтов и веб-приложений, включающих себя
                    пользовательский интерфейс,
                    бизнес логику и высокопроизводительные серверные скрипты.
                </p>
            </div>


            <div class="services-seo services-item animatedIn col-md-5">
                <div class="images">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <h3 class="services-title">
                    SEO
                </h3>
                <p class="services-description">
                    Оптимизация структуры сайта для лучшей его обработки поисковыми
                    системами, что впоследствии улучшает его позиции в поисковой
                    выдаче, ускоряя развитие и увеличивая посещаемост
                </p>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <h2>Мои работы</h2>
        <div class="underline"></div>
        <div class="portfolio-container">
@foreach($portfolio as $data)
            <div class="portfolio-item animatedIn">
                <div class="portfolio-item-inner">
                    <figure class="bubba-effect">
                        <img height="200px" width="350px" src="/{{$data->image}}">
                        <figcaption>
                            <h3>{{$data->title}}</h3>
                            <p>{{$data->mini_desc}}</p>
                        </figcaption>
                    </figure>
                    <div class="fullscreen-picture">
                        <img src="" data-src="/{{$data->image}}">
                        <div class="picture-text">
                            <h3 class="project-title">{{$data->title}}</h3>
                            <h4>Описание проекта:</h4>
                            <p>{{$data->description}}</p>
                            <p>{{$data->created_at}}</p>
                            <h4>Что было сделано мной:</h4>
                            <p class="project-done">Всё вышеперечисленное <a href="{{$data->link}}">Ссылка</a></p>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
         </div>
    </section>

    <section id="skills">
        <h2>Мои навыки</h2>
        <div class="underline"></div>

<div class="col-md-12" style="display: flex;justify-content: center;">
        <div class="col-md-10">
            <div class="bar">

            <div class="skillbar clearfix " data-percent="80%">
                <div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
                <div class="skillbar-bar" style="background: #5a68a5;"></div>
                <div class="skill-bar-percent">80%</div>
            </div>

            <div class="skillbar clearfix " data-percent="80%">
                <div class="skillbar-title" style="background: #504956;"><span>laravel</span></div>
                <div class="skillbar-bar" style="background: #547934;"></div>
                <div class="skill-bar-percent">80%</div>
            </div>            

            <div class="skillbar clearfix " data-percent="80%">
                <div class="skillbar-title" style="background: #27ae60;"><span>SQL</span></div>
                <div class="skillbar-bar" style="background: #2ecc71;"></div>
                <div class="skill-bar-percent">80%</div>
            </div>

            <div class="skillbar clearfix " data-percent="85%">
                <div class="skillbar-title" style="background: #420065;"><span>Bootstrap</span></div>
                <div class="skillbar-bar" style="background: #9F16E9;"></div>
                <div class="skill-bar-percent">85%</div>
            </div>

            <div class="skillbar clearfix " data-percent="90%">
                <div class="skillbar-title" style="background: #d35400;"><span>HTML</span></div>
                <div class="skillbar-bar" style="background: #e67e22;"></div>
                <div class="skill-bar-percent">90%</div>
            </div>

            <div class="skillbar clearfix " data-percent="85%">
                <div class="skillbar-title" style="background: #2980b9;"><span>CSS</span></div>
                <div class="skillbar-bar" style="background: #3498db;"></div>
                <div class="skill-bar-percent">85%</div>
            </div>

            <div class="skillbar clearfix " data-percent="35%">
                <div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
                <div class="skillbar-bar" style="background: #2c3e50;"></div>
                <div class="skill-bar-percent">35%</div>
            </div>

            <div class="skillbar clearfix " data-percent="35%">
                <div class="skillbar-title" style="background: #C19316;"><span>javascript</span></div>
                <div class="skillbar-bar" style="background: #E9DB11;"></div>
                <div class="skill-bar-percent">35%</div>
            </div>


            <div class="skillbar clearfix " data-percent="50%">
                <div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
                <div class="skillbar-bar" style="background: #525252;"></div>
                <div class="skill-bar-percent">50%</div>
            </div>

            <div class="skillbar clearfix " data-percent="60%">
                <div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
                <div class="skillbar-bar" style="background: #4288d0;"></div>
                <div class="skill-bar-percent">60%</div>
            </div>

            <div class="skillbar clearfix " data-percent="60%">
                <div class="skillbar-title" style="background: #000053;"><span>Avacode</span></div>
                <div class="skillbar-bar" style="background: #124e8c;"></div>
                <div class="skill-bar-percent">60%</div>
            </div>

            <div class="skillbar clearfix " data-percent="70%">
                <div class="skillbar-title" style="background: #E23A3A;"><span>Git</span></div>
                <div class="skillbar-bar" style="background: #E29B9B;"></div>
                <div class="skill-bar-percent">70%</div>
            </div>            

            </div>
        </div>
    </div>
</section>

<section id="about">
    <h2>Обо мне</h2>
    <div class="underline"></div>
    <div class="info">
        <div class="photo-area animatedIn toFadeInLeft">
            <img src="{{ asset('/img/rr.png') }}" alt="">
        </div>
        <div class="text-area animatedIn toFadeInRight">
            <ul class="about-list">
                <li class="about-list-item">
                    Для меня программирование это не просто трудовой процесс, но ещё творчество и увлечение.
                </li>
                <li class="about-list-item">
                    <strong>Backend</strong> является моей основной частью
                </li>
                <li class="about-list-item">
                    Знание <strong>MVC</strong>. Могу писать <strong>Объектно орентированным подходом</strong>, а так же <strong>процедурным подходом</strong>.
                </li>
                <li class="about-list-item">
                    Использую <strong>Composer</strong>
                </li>
                <li class="about-list-item">
                    В основном люблю писать на <strong>Laravel</strong>
                </li>
                <li class="about-list-item">
                    Испоьзую систему контролей версии <strong>Git</strong>
                </li>                                 
            </ul>

        </div>
    </div>
</section>

<section id="contact">
    <h2>Связаться со мной</h2>
    <div class="underline"></div>


<div class="col-md-12" style="display: flex;justify-content: center;">
    <div class="col-md-4">

<style>
a:active, a:focus { outline: none; }

input, textarea {outline:none;}
input:active, textarea:active {outline:none;}
:focus {outline:none;}
textarea {resize:none;}
textarea {resize:vertical;}
textarea {resize:horizontal;}    
</style>


    <form action="/send" method="POST">
        {{ csrf_field() }}
        <p class="contact-description">
            Пожалуйста, оставьте свои контактные данные и сообщение, чтобы я мог с Вами как можно скорее связаться.
        </p>

    @guest

        <div class="name animatedIn">
            <input style="height: 35px;width: 100%;padding-left: 5%;border-radius: 20px;margin-bottom: 3%;border: 2px solid #AAAAAA;" type="text" name="name" placeholder="Ваше имя..." required>
        </div>
        
        <div class="email animatedIn">
            <input style="height: 35px;width: 100%;padding-left: 5%;border-radius: 20px;margin-bottom: 3%;border: 2px solid #AAAAAA;" type="email" name="email" placeholder="Ваш email..." required>
        </div>

        <div class="message animatedIn">
            <textarea style="width: 100%;padding-left: 5%;border-radius: 15px;margin-bottom: 3%;border: 2px solid #AAAAAA;" rows="10" name="description" placeholder="Ваше сообщение..." required></textarea>
        </div>        
    @else 

        <div class="message animatedIn">
            <textarea style="width: 100%;padding-left: 5%;border-radius: 15px;margin-bottom: 3%;border: 2px solid #AAAAAA;" rows="10" name="description" placeholder="Ваше сообщение..." required></textarea>
        </div>
    @endguest        
        <div class="submit animatedIn" style="display: flex;justify-content: center;">
            <input style="width: 80%;height: 50px;font-size: 200%;margin-top: 10%;border-radius: 10px;border: none;background: #333333;color: #fff;" type="submit" class="submit" value="Отправить">
        </div>

    </form>

    </div>
</div>


    <h3 class="success-form-sending">Спасибо за Ваше сообщение! <br>
        Я постараюсь связаться с Вами в ближайшее время!</h3>
</section>
</main>

<footer>
    <ul class="socials-links">
        <li><a href="https://github.com/NiyazbekAmanzholov" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="skype:live:kunaev993.spb?userinfo"><i class="fa fa-skype"></i></a></li>
        <li><a href="https://vk.com/n.amanzholov93"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
    </ul>
    <div class="copyright">
        © 2020-2020 by Amanzholov Niyazbek
    </div>
</footer>

<i class="fa fa-times close-modal"></i>
<div class="overlay"></div>

<script type='text/javascript' src='https://ai-development.ru/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js'></script>

<script type='text/javascript'>
lazySizes.init();
</script>

<script type='text/javascript' src='https://ai-development.ru/wp-content/themes/doctorsyl_portfolio/minified/index.js'></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- skill-box -->  
<script src="{{ asset('/js/script.js') }}"></script>
