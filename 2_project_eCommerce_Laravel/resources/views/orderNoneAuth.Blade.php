@extends('layouts.app')

@section('content')
<div class="col-md-12 main">
    <div class="card-body">
    	<div class="row rowContainer"><h3>Оформление заказа</h3></div>
        <div class="row">
			<div class="table-responsive">

	   			<table class="table table-hover table-bordered">
				  <thead class="primary">
				    <tr>
				      <th class="yellow" scope="col">Название</th>   
				      <th class="blue" scope="col">Кол-во</th>
				      <th class="green" scope="col">Цена</th>
				      <th class="purpure" scope="col">Общая cтоимость</th>
				    </tr>
				  </thead>
				 <tbody>     
					@foreach($orders as $order)
				      <td>
				        <a href="">
				          <img height="56px" src="https://www.techcrazy.co.nz/image/catalog/product/Apple/MP%2000392.jpg">
				        </a>
				        <a style="margin-top: 4%;">{{$order->name}}</a>
				      </td>

				      <td>
				        <div class="btn-group center">

				       <span class="count">{{$order->count}}</span>

				        </div>
				      </td>
				      <td>{{$order->price}} kzt.</td>  
				      <td style="color: green;">{{$order->itogprice}} kzt.</td>
				    </tr>   
					@endforeach

				    <tr>
				      <td colspan="3">Общее кол-во:</td>
				      <td style="color: blue;">{{$itogCount}} кол-во.</td>
				    </tr>

				    <tr>
				      <td colspan="3">Общая стоимость:</td>
				      <td style="color: red;">{{$total}} kzt.</td>
				    </tr>

				  </tbody>
				</table>

			 <div class="container">
				 <div class="row">	 	
				      <div style="padding-top: 3%;padding-bottom: 3%;margin-left: 3%;" class="col-md-5 form rowBlock main">
				        <form action="{{ url('charge') }}" method="post" id="payment-form">
				            <div class="form-row" style="padding-top: 30px;">
				                <input type="hidden" name="amount" class="form-control mb-3" value="{{$total}}" />
				                <input type="text" name="email" class="form-control mb-3" value="" placeholder="Введите Email" />
				                <input type="text" name="address" class="form-control mb-3" placeholder="Введите адрес доставки" />					                
				                <input type="text" name="number" class="form-control mb-3" value="" placeholder="Введите номер" />	
				                <input type="hidden" name="ip_address" class="form-control mb-3" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />               
				                <label for="card-element">
				                Кредитная или дебетовая карта
				                </label>
				                <div id="card-element" class="form-control mb-3" >
				                <!-- A Stripe Element will be inserted here. -->
				                </div>

				            </div>
						<div class="rowContainer">            
				            <button class="btn btn-success">Заказать оплатив</button>
				        </div>    
				            {{ csrf_field() }}
				        </form>
				      </div>

				      <div style="padding-top: 3%;padding-bottom: 3%;margin-left: 11%;" class="col-md-5 form rowBlock main">

				        <form action="/charge/noPay" method="post" id="payment-form">
				            <div class="form-row" style="padding-top: 30px;">
				                <input type="hidden" name="amount" class="form-control mb-3" value="{{$total}}" />
				                <input type="text" name="email" class="form-control mb-3" value="" placeholder="Введите Email" />
				                <input type="text" name="address" class="form-control mb-3" placeholder="Введите адрес доставки" />					                
				                <input type="text" name="number" class="form-control mb-3" value="" placeholder="Введите номер" />	
				                <input type="hidden" name="ip_address" class="form-control mb-3" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />

				            </div>
						<div class="rowContainer" style="margin-top: 19%;">            
				            <button class="btn btn-success">Заказать без оплаты</button>
				        </div>    
				            {{ csrf_field() }}
				        </form>
					</div>
			      </div>
			   </div>
			</div>
    	</div>				
    </div>
</div>

@endsection

