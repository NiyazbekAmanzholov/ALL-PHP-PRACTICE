@extends('layouts.app')

@section('content')

<div class="col-md-12" style="display: flex;justify-content: center;">
	<div class="col-md-10 table-responsive">
	<div class="row"><a href="/admin/page/add/portfolio" class="btn btn-success">Страница моих сайтов</a></div>		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Имя</th>
		      <th scope="col">Email</th>
		      <th scope="col">Сообщение</th>
		      <th scope="col">Время</th>		      
		    </tr>
		  </thead>
		  <tbody>
@foreach($message as $data)		  	
		    <tr>
		      <th scope="row">{{$data->id}}</th>
		      <td>{{$data->name}}</td>
		      <td>{{$data->email}}</td>
		      <td>{{$data->description}}</td>
		      <td>{{$data->created_at}}</td>
		    </tr>
@endforeach
		  </tbody>
		</table>
	</div>
</div>

@endsection
