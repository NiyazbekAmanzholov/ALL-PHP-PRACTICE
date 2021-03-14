@extends('layouts.adminLayout')

@section('content')
<div class="card-body">

<div class="rowContainer"><h3>Админ панель</h3></div>

<div class="card-body">
	<div class="rowContainer"><h5>Продукты</h5></div>		
    <div class="row">
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
			  <thead class="primary">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Картинка</th>
			      <th scope="col">Название</th>
			      <th scope="col">ID категории</th>
			      <th scope="col">Цена</th>
			      <th scope="col">Описание</th>
			      <th scope="col">Вид продажи</th>
			      <th scope="col">Просмотры</th>
			      <th scope="col">Добавленно</th>
			      <th scope="col">Удалить</th>	
			      <th scope="col">Редактировать</th>			      		      			      			      
			    </tr>
			  </thead>
			  <tbody>
			@foreach($products as $product)  	
			    <tr>
			      <th scope="row">{{$product->id}}</th>	
			      <th >
                    @if($product->image != 'img')
                    <img src="{{$product->image}}" class="card-img-top" alt="...">           
                    @else
                    <img src="https://a.allegroimg.com/original/038291/e462962d4d808eb1a0c4e6bb5ca8" class="card-img-top" alt="...">  
                    @endif
			      </th>			      		    	
			      <th>{{$product->title}}</th>
			      <td>{{$product->category_id}}</td>
			      <td>{{$product->price}}</td>			      
			      <td>{{str_limit($product->description,20)}}</td>			      
			      <td>{{$product->field}}</td>			      
			      <td class="space_between"><p style="margin-right: 5%;margin-top: 9%;">{{$product->views}}</p><a href="/admin/view/upload/{{$product->id}}" class="btn btn-warning">Обновить</a></td>
			      <td>{{$product->created_at}}</td>	
			      <td><a href="/admin/product/destroy/{{$product->id}}" class="btn btn-danger">x</a></td>
			      <td><a href="/admin/product/edit/page/{{$product->id}}" class="btn btn-success">Редактировать</a></td>				      				      		      
			    </tr>
			@endforeach
			  </tbody>
			</table>
    	</div>                			
    </div>
    {{$products->render("pagination::bootstrap-4")}}	
</div>
@endsection