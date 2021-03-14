@extends('layouts.adminLayout')

@section('content')
<div class="card-body">

<div class="rowContainer"><h5>Отзывы</h5></div>	
<div class="row">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
		  <thead class="primary">
		    <tr>
		      <th scope="col">Статус</th><th></th>
		      <th scope="col">Товар</th><th></th>
		      <th scope="col">Имя комментируемого</th>
		      <th scope="col">Отзыв</th>			      
		      <th scope="col">Добавленно</th>
		      <th scope="col">Удалить</th>	
		      <th scope="col">Допустить</th>
		      <th scope="col">Запретить</th>			      			      		      			      			      
		    </tr>
		  </thead>
		  <tbody>
			@foreach($comments as $comment)	
		    <tr>
		      <td>
				@if($comment->status == 1)
				<p class="color_green">active</p>
				@else
				<p class="color_red">baned</p>
				@endif
		      	<td>			    	
		      <td>{{$comment->product_name}}<td>
		      <td>{{$comment->name}}</td>
		      <td>{{$comment->description}}</td>
		      <td>{{$comment->created_at}}</td>	
		      <td><a href="/admin/comment/delete/{{$comment->id}}" class="btn btn-danger">x</a></td>
		      <td><a href="/admin/comment/active/{{$comment->id}}/" class="btn btn-success">Допустить</a></td>
		      <td><a href="/admin/comment/ban/{{$comment->id}}" class="btn btn-warning">Запретить</a></td>				      		   
		    </tr>
			@endforeach   
		  </tbody>
		</table>
	</div>
</div>
{{$comments->render("pagination::bootstrap-4")}}	
</div>

@endsection