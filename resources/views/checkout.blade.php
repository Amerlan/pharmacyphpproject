@extends('layouts.app')
@section('content')
<div class="main-content-wrapper d-flex clearfix">

    @include('layouts.header')
    <!-- Header Area End -->

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Checkout</h2>
                        </div>

                        {!! Form::open(['url' => '/order']) !!}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                  {{Form::label('fname', 'First Name')}}
                                    {{Form::text('fname')}}
                                </div>
                                <div class="col-md-6 mb-3">
                                  {{Form::label('lname', 'Last Name')}}
                                    {{Form::text('lname')}}
                                </div>
                                <div class="col-12 mb-3">
                                  {{Form::label('address', 'Address')}}
                                    {{Form::text('address')}}
                                </div>
                                <div class="col-md-6 mb-3">
                                  {{Form::label('postcode', 'Postcode')}}
                                    {{Form::text('postcode')}}
                                </div>
                                <div class="col-md-6 mb-3">
                                  {{Form::label('phone_number', 'Phone number')}}
                                    {{Form::text('phone_number')}}
                                </div>
                                <div class="col-12 mb-3">
                                  {{Form::label('comment', 'Comments')}}
                                    {{Form::text('comment')}}
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>Total:</span> <span>{{$totalprice}}</span></li>
                        </ul>

                        <div class="payment-method">
                            <!-- Cash on delivery -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                            <p><a>Bank Card <img src="https://sun9-15.userapi.com/c206616/v206616381/fb25f/WRo_c9B7rqs.jpg"></a></p>
                            </div>
                            <!-- Paypal -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <p><a>Cash on Delivery <img class="ml-15" src="https://sun9-71.userapi.com/c206616/v206616381/fb24e/UbojDCyMyV8.jpg" ></a></p>
                            </div>
                        </div>

                        <div class="cart-btn mt-100">
                          {{Form::submit('Checkout')}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
