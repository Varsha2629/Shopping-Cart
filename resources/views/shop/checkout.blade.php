@extends('layouts.master')

@section('title')
     Laravel Shopping Cart
@endsection
@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total }}</h4>
                    <div id="charge-error" class="alert-danger {{ !Session::has('error') ? 'hidden' :''  }}">
                        {{ Session::get('error') }}
                    </div> 
                <form action="{{ URL('/checkout') }}" method="post" id="payment-form">
                
                    <div class="form-row">
                        <label for="card-element">
                        Credit or debit card
                        </label>
                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    {{csrf_field()}}

                    <button type="submit" class="btn btn-success" id="form-buy">Buy now</button>
                </form>


        @section('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
        @endsection 
        </div>
    </div>
  
@endsection
