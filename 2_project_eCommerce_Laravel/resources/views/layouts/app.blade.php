@php 
use App\Product;
$productCount = Product::productCount();#для подсчета товара
$productTotalPriceCount = Product::productTotalPriceCount();#для подсчета цены товара

@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="icon" href="http://faviconka.ru/ico/faviconka_ru_1083.png" type="image/x-icon" />

<script src="https://js.stripe.com/v3/"></script>
 
<link href="{{ asset('/css/style.css') }}" rel="stylesheet"/>
     
</head>
<body>

<div class="container-fluid" style="min-height: 550px;">
    <nav class="navbar navbar-expand-lg navbar-light header rowBlock">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">

       <ul class="navbar-nav mr-auto">
       </ul>

        @guest
        <a class="navbar-brand" style="display: flex;" href="/basketNoneAuth/">         
          <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
        </a>
        <div>
          <div style="width: 100%;color: white;">{{$productCount}} шт</div>
          <div style="height: 50%;width: 100%;color: white;">{{$productTotalPriceCount}} kzt</div>
        </div>        
        @else         
        <a class="navbar-brand" href="/wish/my/{{ Auth::user()->id }}">
          <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
        </a>
        <div style="margin-right: 1%;margin-top: -1.8%;">
          <div style="height: 50%;width: 100%;color: white;">{{ Auth::user()->wishes()->count() }} шт</div>
        </div>

        <a class="navbar-brand" href="/authBasket/{{ Auth::user()->id }}">
          <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
        </a>          
        <div style="margin-right: 1%;">
          <div style="height: 50%;width: 100%;color: white;">{{$productCount}} шт</div>
          <div style="height: 50%;width: 100%;color: white;">{{$productTotalPriceCount}} kzt</div>
        </div>
        @endguest

         @guest
        <ul class="form-inline my-2 my-lg-0">

            <li class="nav-item">
                <a class="nav-link links" href="{{ route('login') }}">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link links" href="{{ route('register') }}" >Регистрация</a>
            </li>
            @else
          <li class="nav-item dropdown rowContainer">

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

  <div class="rowContainer">
      @if (session('success'))
          <div style="position: absolute;z-index: 999999;" class="alert alert-danger">
              {{ session('success') }}
          </div>
      @endif  
  </div>
    @yield('content')
    
    
</div>
@include('layouts.footer')
     

    <!-- Scripts -->
<script>
var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
</script>
<script src="{{ asset('/js/card.js') }}"></script>    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
