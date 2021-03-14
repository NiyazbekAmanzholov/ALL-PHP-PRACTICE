<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">  
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<script src="https://js.stripe.com/v3/"></script>

     
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light header rowBlock">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
      <a class="navbar-brand" href="{{route('admin')}}">Админ Панель</a>      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('payments') }}">Заказы <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('comment') }}">Отзывы</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Меню
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('productAdd')}}">Добавить товар (категорию)</a>
              <a class="dropdown-item" href="{{ route('categoryPage')}}">Страница категорий</a>              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('users') }}">Зарегистрированые пользователи</a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="cart" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>


        @guest
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle links" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu margin-left" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('profile')}}">Мой кабинет</a>              
            @if(Auth::user()->role == '1')
            <a class="dropdown-item" href="{{route('admin')}}">Админ панель</a>
            @endif
                <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              Выход
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form></a>
            </div>
          </li>
            @endguest
        </ul>
      </div>
    </nav>
</div>

<div class="rowContainer">
    @if (session('success'))
        <div style="position: absolute;z-index: 999999;" class="alert alert-danger">
            {{ session('success') }}
        </div>
    @endif  
</div>
@yield('content')

    <!-- Scripts -->
<script>
var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
</script>
<script src="{{ asset('/js/card.js') }}"></script>    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
