@extends('layouts.adminLayout')

@section('content')

<div class="col-md-12"> 
   <div class="card-body">
	<div class="rowContainer"><h3>Заказы</h3></div>
        <div class="row">
			<div class="table-responsive">
			<table class="table table-hover table-bordered">
			  <thead class="primary">
			    <tr>
			      <th class="green" scope="col">ID</th>
			      <th class="green" scope="col">Payment_id</th>
			      <th class="green" scope="col">Email</th>
			      <th class="green" scope="col">Номер</th>
			      <th class="green" scope="col">Ip_address</th>
			      <th class="green" scope="col">Адрес</th>			      				     
			      <th class="green" scope="col">Общая сумма</th>
			      <th class="green" scope="col">Валюта</th>
			      <th class="red" scope="col">Статус оплаты</th>
			      <th class="green" scope="col">Время заявки</th>
			      <th class="red" scope="col">Удалить</th>			      			      
			    </tr>
			  </thead>
			  <tbody>
			    @foreach($payments as $payment)			  	
			    <tr>
			      <th scope="row">{{$payment->id}}</th>
			      <td>{{$payment->payment_id}}</td>
			      <td>{{$payment->payer_email}}</td>
			      <td>{{$payment->number}}</td>	
			      <td>{{$payment->ip_address}}</td>	
			      <td>{{$payment->address}}</td>				      		      		      
			      <td>{{$payment->amount}}</td>
			      <td>{{$payment->currency}}</td>
			      <td class="red">{{$payment->payment_status}}</td>	
			      <td>{{$payment->created_at}}</td>
			      <td><a href="/admin/payments/delete/{{$payment->id}}" class="btn btn-danger">X</a></td>				         
			    </tr>
			    @endforeach 
			  </tbody>
			</table>
		</div>				
    </div>
  </div>
{{$payments->render("pagination::bootstrap-4")}}	  
</div>

@endsection