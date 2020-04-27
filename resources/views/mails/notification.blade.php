@extends('mails.templatemail')
@section('content')
<div class="main-content-wrapper d-flex clearfix">
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
          <h1>Hey, suppose u missed our news</h1>
          <h1> From your last visit we got new product </h1>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>New item</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Author</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($product as $elem)
                                <tr>
                                    <td class="cart_product_img">
                                        <img src={{ $elem->url}} width="100" height="100" alt="Product">
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$elem->title}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>{{$elem->price}}</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <p>{{$elem->author}}</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<span><a href ={{ route( 'unsub', [ 'token' => $token]) }}> Unsubscribe </a></span>
@endsection
