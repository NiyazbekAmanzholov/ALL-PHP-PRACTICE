@extends('layouts.app')

@section('content')

<div class="col-md-12" style="display: flex;justify-content: center;">
	<div class="col-md-2">
	@if (session('success'))
        <h3 style="color: green;">
            {{ session('success') }}
        </h3>
    @endif 
	</div>
</div>	

<div class="col-md-12" style="display: flex;justify-content: center;">
	<div class="col-md-3"><h1>Добавить сайт.</h1></div>
</div>	
		<div class="col-md-12" style="display: flex;justify-content: center;">
			<div class="col-md-8" style="background: blue;">	
				<form action="/admin/add/portfolio/create" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column;justify-content: space-around;height: 300px;">
					{{csrf_field()}}
				<input type="text" name="title" placeholder="Название сайта" style="margin-top: 2%;" required="">
				<input type="text" name="mini_desc" placeholder="Краткое описание сайта" style="margin-top: 2%;" required="">
				<textarea name="description" placeholder="Описание сайта" cols="30" rows="10" style="margin-top: 2%;" required=""></textarea>
				<input type="text" name="link" placeholder="Ссылка на сайт" style="margin-top: 2%;" required="">
				<input type="file" name="image" style="margin-top: 2%;" required="">
				<button style="margin-top: 2%;">Добавить сайт</button>
				</form>
			</div>
		</div>




@endsection