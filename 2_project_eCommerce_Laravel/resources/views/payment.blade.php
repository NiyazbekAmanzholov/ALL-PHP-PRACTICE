@extends('layouts.app')

@section('content')


 <div class="container" style="min-height: 420px;">
    <div class="row rowContainer">
      <div class="col-md-8 form rowBlock header main">
        <form action="{{ url('charge') }}" method="post" id="payment-form">
            <div class="form-row" style="padding-top: 30px;">
                <input type="text" name="amount" class="form-control mb-3" placeholder="Enter Amount" />
                <input type="email" name="email" class="form-control mb-3"  placeholder="Enter Email" />
                <label for="card-element">
                Credit or debit card
                </label>
                <div id="card-element" class="form-control mb-3" >
                <!-- A Stripe Element will be inserted here. -->
                </div>
             
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button class="btn btn-success">Оплатить</button>
            {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>

@endsection
