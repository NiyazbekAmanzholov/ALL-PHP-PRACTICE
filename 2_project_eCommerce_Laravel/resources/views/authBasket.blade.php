@extends('layouts.app')

@section('content')
<div class="col-md-12 main" style="min-height: 420px;"> 

    <div class="card-body">
        <div class="row">
			<div class="table-responsive">
	   			<table class="table table-hover table-bordered">
				  <thead class="primary">
				    <tr>
				      <th class="yellow" scope="col">Название</th>   
				      <th class="blue" scope="col">Кол-во</th>
				      <th class="green" scope="col">Цена</th>
				      <th class="purpure" scope="col">Общая cтоимость</th>
				      <th class="red" scope="col">Удалить</th>  
				    </tr>
				  </thead>
				 <tbody>     
					@foreach($orders as $order)
				      <td>
				        <a href="">
				          <img height="56px" src="/{{$order->image}}">
				        </a>
				        <a href="/page/{{$order->product_id}}" style="margin-top: 4%;">{{$order->name}}</a>
				      </td>

				      <td>
				        <div class="btn-group center">

				       <span class="count">{{$order->count}}</span>

				          <form action="/basket/minus/{{$order->id}}" method="POST">
				            {{ csrf_field() }}    
				            <button type="submit" class="btn btn-danger">-</button> 
				          </form> 

				          <form action="/basket/update/{{$order->id}}" method="POST">
				            {{ csrf_field() }}  
				            <button type="submit" class="btn btn-primary">Обновить</button> 
				          </form>

				          <form action="/basket/add/{{$order->id}}" method="POST">
				            {{ csrf_field() }}  
				            <button type="submit" class="btn btn-success">+</button> 
				          </form>

				        </div>
				      </td>
				      <td>{{$order->price}} kzt.</td>  
				      <td style="color: green;">{{$order->itogprice}} kzt.</td>
				      <td><a href="/deleteBrand/{{$order->id}}" class="btn btn-danger">x</a></td>
				    </tr>   
					@endforeach

				    <tr>
				      <td colspan="4">Общее кол-во:</td>
				      <td style="color: blue;">{{$itogCount}} кол-во.</td>
				    </tr>

				    <tr>
				      <td colspan="4">Общая стоимость:</td>
				      <td style="color: red;">{{$totalPrice}} kzt.</td>
				    </tr>

				  </tbody>
				</table>

              <a class="btn btn-danger" href="/basket/destroy/">Удалить все</a>   
              <a class="btn btn-success" href="/order/">Оформить заказ</a>  

			</div>
    	</div>				
    </div>
</div>
@endsection
