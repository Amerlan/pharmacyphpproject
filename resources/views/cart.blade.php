@extends('layouts.app')
@section('content')

<div class="main-content-wrapper d-flex clearfix">
@include('layouts.header')
    <!-- Mobile Nav (max width 767px)-->

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($products as $elem)
                                <tr>
                                    <td class="cart_product_img">
                                        <img src={{ $elem['item']->url }} alt="Product">
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$elem['item']->title}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>{{$elem['price']}}</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <p>{{ $elem['qty'] }} <span>({{$elem['item']->price}}$ per item)</span></p>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>total:</span> <span>{{$totalprice}}</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href='checkout' class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
