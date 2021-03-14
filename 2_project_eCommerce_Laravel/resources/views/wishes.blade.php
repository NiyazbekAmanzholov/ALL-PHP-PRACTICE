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
				      <th class="green" scope="col">Цена</th>
				      <th class="green" scope="col">В корзину</th>				      
				      <th class="red" scope="col">Удалить</th>  
				    </tr>
				  </thead>
				 <tbody>     
					@foreach($wishes as $wish)
				      <td>
				        <a href="">
				          <img height="56px" src="/{{$wish->image}}">
				        </a>
				        <a href="/page/{{$wish->product_id}}" style="margin-top: 4%;">{{$wish->name}}</a>
				      </td>

				      <td>{{$wish->price}} kzt.</td>  
					  <td>
					   <form action="/indexAdd/{{ $wish->product_id }}" method="POST">
                            {{ csrf_field() }} 
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <button class="btn btn-outline-primary font-size">В корзину</button>
                        </form> 

					  </td>
				      <td><a href="/wish/delete/{{$wish->id}}" class="btn btn-danger">x</a></td>
				    </tr>   
					@endforeach
				  </tbody>
				</table>
				<a class="btn btn-danger" href="/wish/delete/all/{{ Auth::user()->id }}">Удалить все</a> 				
			</div>
    	</div>				
    </div>
</div>

@endsection
