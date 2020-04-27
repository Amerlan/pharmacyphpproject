
@extends('layouts.app')
@section('content')
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Header Area Start -->
        @include('layouts.header')
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
          <div class="row">
              <div class="col-12">
                  <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                      <!-- Total Products -->

                      <div class="total-products">

                      </div>
                      <div class="total-products">
                      </div>
                  </div>
              </div>
          </div>
            <div class="amado-pro-catagory clearfix">

              {!! Form::open(['url' => '/store']) !!} <!-- сабмит бук это та ссыль на которую
                                                              нас отправит после кнопки сабмит
                                                              её мы настраиваем в web.php
                                                                То, куда она нас отправит (127.0.0.1:8000/submitbook) должно быть post а не GET-->
            <div class="form_group">
              <label>Title</label>
              <br>
              {{Form::text('title')}}
            </div>
            <div class="form_group">
            <label>Author</label>
            <br>
            {{Form::text('author')}}
          </div>
          <div class="form_group">
            <label>URL</label>
            <br>
            {{Form::text('url')}}
          </div>
          <div class="form_group">
            <label>Digital version of book</label>
            <br>
            {{Form::text('source')}}
          </div>
            <div class="form_group">
            <label>Price</label>
            <br>
            {{Form::text('price')}}
            </div>
            <br>
            {{Form::submit('submit')}}
            <br>
            {!! Form::close() !!}
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>

@include('layouts.footer')
@endsection
