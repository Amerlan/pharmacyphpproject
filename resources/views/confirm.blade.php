<?php
$temp = explode(", ",strval($response));
 ?>
@extends('layouts.app')
@section('content')

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Order is preparing.</h2>
                        </div>
                        <P>Dear {{$data['fname']}}! Thank You for choosing our website. Your order number is {{$data['id']}}.</p>
                        <p> Shipping info </p>
                        <p>To: {{$temp[0]}}, {{$data['address']}} street.</p>

                        <p></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>total:</span> <span>{{$data['bill']}}$</span></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
