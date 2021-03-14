@extends('layouts.app')

@section('content')

        <div class="col-md-12" style="margin-top: 1%;">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">   

            <!---Products-->
               
                    <div class="col-md-5">
                      <div class="card mb-2 shadow-sm">
                        <div class="btn btn-danger sale" >{{$id->field}}</div>
                        <div class="rowContainer">      
                          <img src="/{{$id->image}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="card-body">            
                          
                          <div class="rowContainer">
                                <form action="/indexAdd/{{ $id->id }}" method="post">
                                    {{ csrf_field() }} 
                                    @guest
                                    <a href="/addToBasket/{{ $id->id }}" class="btn btn-outline-success font-size">В корзину</a>
                                    @else
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <button class="btn btn-outline-primary font-size">В корзину</button>
                                    @endguest
                                </form> 
                          </div>
                            <div class="items">
                                <p class="space_between  margin_left_minus">{{$comment}}<i style="margin-top: 14%;" class="fa fa-comment-o" aria-hidden="true"></i></p>
                                <p class="space_between">{{$id->views}}<i style="margin-top: 14%;" class="fa fa-eye" aria-hidden="true"></i></p>
                            </div>      
                        </div>
                      </div>
                    </div>

                    <div class="col-md-7">
                      <div class="card mb-2 shadow-sm">
               
                        <div class="card-body">
                            <strong class="rowContainer">{{$id->title}}</strong>
                            <p class="rowContainer">{{$id->price}} kzt</p>                
                          <p class="card-text">{{($id->description)}}</p>

                        </div>               
                            
                        </div>
                      </div>
                    </div>

                
            <!---Products-end-->
                </div> 
            </div>
          </div>
        </div>   

        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">
					<div class="card-body" style="display: flex;flex-direction: column;">
                   		<h1>Оставить отзыв</h1>
							<form style="display: flex;flex-direction: column;" action="/postComment/" method="GET">
                    @guest 								
		                   		<input type="text" name="name" placeholder="Введите имя">
                    @else
                          <input type="hidden" name="name" value="{{ Auth::user()->name }}" placeholder="Введите имя">
                    @endguest      
		                   		<input type="hidden" name="product_id" value="{{$id->id}}">
                          <input type="hidden" name="product_name" value="{{$id->title}}">                        		
		                   		<textarea class="main" name="comment" id="" cols="30" rows="2">Введите отзыв</textarea> 
				            	<button type="submit" class="main bottom btn btn-success">Отправить</button> 		                   		  
							</form>
                   		<h1>Отзывы</h1>
                   	</div>	
            <!---Products-->
                    @foreach($comments as $comment)
                        <div class="card-body" style="border:1px solid gray;width: 100%;">
           
                          <strong class="card-text color_green"><span>Имя: </span>{{$comment->name}}</strong>
                          <p class="card-text color_green">{{$comment->product_name}}</p>                          
                          <p class="card-text">{{$comment->description}}</p>
                          <p class="card-text"><span>Дата: </span>{{$comment->created_at}}</p>                          
                        </div>                
                    @endforeach  
            <!---Products-end-->
                </div> 
            </div>
          </div>
        </div>  

@endsection

