@extends('mails.templatemail')
@section('content')

<div class="main-content-wrapper d-flex clearfix">
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Dear {{$name}}! Your order {{$checkinfo->id}} is ready.</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Download link</th>
                                </tr>
                            </thead>
                            <tbody>

                              @foreach ($cart as $elem)
                                <tr>
                                    <td class="cart_product_img">
                                        <img src={{ $elem['item']->url}} width="100" height="100" alt="Product">
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$elem['item']->title}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>{{$elem['item']->author}}</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <span>{{$elem['item']->source}}</span>
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
                        <h5>Invoice will come in next message.</h5>
                        <ul class="summary-table">
                            <li><span>Amount:</span> <span>{{$checkinfo->bill}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
