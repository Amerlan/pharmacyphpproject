@extends('layouts.app')
@section('content')
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix mt-100">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                @foreach($data as $element)
                <div class="single-products-catagory clearfix">
                    <a href="shop">
                        <img src="{{$element->url}}" alt="{{$element->author}}">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>{{$element->price}}$</p>
                            <h4>{{$element->title}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
              </div>
          </div>
        <!-- Product Catagories Area End -->
@endsection
