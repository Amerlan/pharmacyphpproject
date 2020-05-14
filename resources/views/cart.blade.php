@extends('layouts.app')
@section('content')

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart </h2>
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
                              @if($products)
                              @foreach ($products as $elem)
                                <tr>
                                    <td class="cart_product_img">
                                        <img src={{ $elem['item']->url}} width="100" height="100" alt="Product">
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$elem['item']->title}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>{{$elem['price']}}</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                          <a href={{ route('product.delete',['id' => $elem['item'] ->id] )}}><span class="iconify" data-icon="mdi:cart-minus" data-inline="false" data-width="24" data-height="24"></span></a>
                                          <p>{{ $elem['qty'] }}</p>
                                          <a href={{ route('product.add',['id' => $elem['item'] ->id] )}}><span class="iconify" data-icon="mdi:cart-plus" data-inline="false" data-width="24" data-height="24"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <h3>You didn't add anything. Go to <a href= 'shop'> <h3>shop</h3></a></h3>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>total:</span> <span>{{$totalprice ?? 0}}$</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href='checkout' class="amado-btn w-100">Checkout</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
