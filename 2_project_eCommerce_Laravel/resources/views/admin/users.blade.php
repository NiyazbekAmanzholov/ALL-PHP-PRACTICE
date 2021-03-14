@extends('layouts.adminLayout')

@section('content')
<div class="col-md-12 main">
    <div class="card-body">
        <div class="row">
			<div class="table-responsive">
	   			<table class="table table-hover table-bordered">
				  <thead class="primary">
				    <tr>
				      <th class="yellow" scope="col">ID</th>   
				      <th class="blue" scope="col">Имя</th>
				      <th class="green" scope="col">Email</th>
				      <th class="purpure" scope="col">Номер телефона</th>
				      <th class="green" scope="col">Дата регистрации</th>
				      <th class="green" scope="col">Полнамочия</th>
				      <th class="red" scope="col">Сменить полнамочия</th> 	
				      <th class="red" scope="col">Удалить</th> 				      			      				
				    </tr>
				  </thead>
				 <tbody>     
					@foreach($users as $user)
				      <td>
				        {{$user->id}}
				      </td>
				      <td>
						{{$user->name}}
				      </td>
				      <td>
				      	{{$user->email}}
				      </td>
				      <td>
				      	{{$user->number}}
				      </td>  
				      <td>
				      	{{$user->created_at}}
				      </td>
				      <td>
				      	{{$user->role}}
				      </td>
				      <td>
				      	<a href="/admin/administrator/{{$user->id}}" class="btn btn-success">Админ</a>
				      	<a href="/admin/client/{{$user->id}}" class="btn btn-warning">Клиент</a>				      					      	
				      </td>
				      <td>
				      	<a href="/admin/delete/{{$user->id}}" class="btn btn-danger">x</a>
				      </td>
				    </tr>   
					@endforeach
				  </tbody>
				</table>
			</div>
    	</div>				
    </div>
</div>


@endsection