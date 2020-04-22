
@extends('layouts.app')
@section('content')
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Header Area Start -->
        @include('layouts.header')
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                @foreach($data as $element)
                <div class="single-products-catagory clearfix">
                    <a href="shop">
                        <img src={{$element->url}} height = "150px" width = "150px" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>{{$element->price}}</p>
                            <p>{{$element->author}}</p>
                            <h4>{{$element->title}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>

@include('layouts.footer')
@endsection
