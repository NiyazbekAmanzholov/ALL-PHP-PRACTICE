@extends('layouts.adminLayout')

@section('content')
<div class="card-body">

<div class="rowContainer"><h5>Категории</h5></div>	
<div class="row">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
		  <thead class="primary">
		    <tr>
		      <th scope="col">ID категории</th>
		      <th scope="col">Название категории</th>
		      <th scope="col">Добавленно</th>
		      <th scope="col">Удалить</th>	
		      <th scope="col">Редактировать</th>			      		      			      			      
		    </tr>
		  </thead>
		  <tbody>
		@foreach($categories as $category)  	
		    <tr>
		      <th scope="row">{{$category->id}}</th>			      		    	
		      <th >{{$category->category}}</th>
		      <td>{{$category->created_at}}</td>	
		      <td><a href="/admin/category/destroy/{{$category->id}}" class="btn btn-danger">x</a></td>
		      <td><a href="/admin/category/edit/page/{{$category->id}}" class="btn btn-success">Редактировать</a></td>				      				      	   
		    </tr>
		@endforeach
		  </tbody>
		</table>
	</div>
</div>
{{$categories->render("pagination::bootstrap-4")}}	 	
</div>
@endsection