@extends('layouts.app')

@section('content')

    <main class="py-4">
      <div class="container" style="min-height: 420px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Профиль пользователя</h3></div> 

                        <form action="/profile/edit/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                        	{{csrf_field()}}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Имя</label>
                                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{ Auth::user()->name }}">
                                       
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="email" class="form-control is-invalid" name="email" id="exampleFormControlInput1" value="{{ Auth::user()->email }}">
                                        <span class="text text-danger">
                                            Ошибка валидации
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Номер телефона</label>
                                        <input type="text" class="form-control" name="number" id="exampleFormControlInput1" value="{{ Auth::user()->number }}">
                                       
                                    </div>                                    

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Аватар</label>
                                        <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                        @if(Auth::user()->image != 'img')            
                                    <img src="{{ Auth::user()->image }}" alt="" class="img-fluid">
                        @else
                                    <img src="{{ asset('img/no-user.jpg') }}" alt="" class="img-fluid">                        
                        @endif             
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-warning">Редактировать профиль</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-header"><h3>Безопасность</h3></div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="main alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif  

                        <form action="/profile/edit/password/{{ Auth::user()->id }}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Текущий пароль</label>
                                        <input type="password" name="current" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Новый пароль</label>
                                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Подтвердите пароль</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <button class="btn btn-success">Сменить пароль</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
@endsection
