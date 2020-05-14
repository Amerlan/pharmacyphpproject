@extends('layouts.app')
@section('content')
    <!-- ##### Main Content Wrapper Start ##### -->

        <!-- Header Area Start -->

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
                            <div class="product-sorting d-flex">
                                <div class="view-product d-flex align-items-center">
                                  <span>View</span>
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{$select}} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('shop') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('mysub').value = 6;
                                                     document.getElementById('view').submit();">
                                                  6
                                            </a>

                                            <a class="dropdown-item" href="{{ route('shop') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('mysub').value = 8;
                                                             document.getElementById('view').submit();">
                                                  8
                                            </a>

                                            <a class="dropdown-item" href="{{ route('shop') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('mysub').value = 10;
                                                             document.getElementById('view').submit();">
                                                  10
                                            </a>

                                            <a class="dropdown-item" href="{{ route('shop') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('mysub').value = 12;
                                              document.getElementById('view').submit();">
                                                  12
                                            </a>

                                            <form id="view" action="{{ route('shop')}}" method="post" style="display: none;">
                                                @csrf
                                                <input id = 'mysub' type="hidden" name = 'select'/>
                                            </form>
                                        </div>

                                </div>
                            </div>
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
                            <a href={{ route('product.add',['id' => $elem ->id] )}} style="text-decoration: none;">
                            <div class="product-img">
                                <img src={{$elem->url}} alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <h5>{{$elem->author}}</h5>
                                    <h6>{{$elem->title}}</h6>
                                    <p class="product-price">{{$elem->price}}$</p>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart">
                                    <div class="cart">
                                        <a href="{{ route('product.add',['id' => $elem ->id] )}}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="{{asset('images/cart.png')}}" alt=""></a>
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
    @endsection
