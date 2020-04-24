@extends('layouts.app')
@section('content')
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
        <!-- Header Area Start -->
        @include('layouts.header')
        <!-- Header Area End -->

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            @if (count($data)>0)
                            <div class="total-products">
                                <p>Showing {{$data[0]->id}}-{{$data[0]->id + count($data) - 1}}</p>
                            </div>
                            @else
                            <div class="total-products">
                                <p>Showing 0 out of 0</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Single Product Area -->
                    @if (count($data) > 0)
                    @foreach ($data as $elem)
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src={{$elem->url}} alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src={{$elem->url2}} alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <p>{{$elem->author}}</p>
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{$elem->price}}</p>
                                    <a href={{ route('product.add',['id' => $elem ->id] )}}>
                                        <h6>{{$elem->title}}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="cart">
                                        <a href="cart" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endforeach
@else
<div class="total-products">
    <h3>Shop is empty. Sorry.</h3>

</div>
@endif
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            {{$data->links()}}
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.footer')
    @endsection
