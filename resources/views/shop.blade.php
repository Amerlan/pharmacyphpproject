<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> ReadHome | Shop</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
 @include('layouts.style')
</head>
<body>
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="home"><img src="https://sun9-38.userapi.com/c855232/v855232818/21858a/NZYAEGcKyyc.jpg" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li class="active"><a href="shop">Shop</a></li>
                    <li><a href="product_details">Product</a></li>
                    <li><a href="cart">Cart</a></li>
                    <li><a href="checkout">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="cart-nav"><img src="https://sun9-40.userapi.com/c857636/v857636045/1bd091/QRA00czx00Q.jpg" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="search-nav"><img src="https://sun9-26.userapi.com/c857636/v857636045/1bd08a/Qjio1hnGLlw.jpg" alt=""> Search</a>
            </div>

        </header>
        <!-- Header Area End -->

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Showing 1-5 of {{count($data)}}</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Single Product Area -->
                    @foreach ($data as $data)
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src={{$data->url}} alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src={{$data->url2}} alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <p>{{$data->author}}</p>
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{$data->price}}</p>
                                    <a href="#">
                                        <h6>{{$data->title}}</h6>
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
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                  <div class="newsletter-form mb-100">
                    {!! Form::open(['url' => 'senddiscount']) !!}  <!--тут мы переходим на senddiscount ссылку при нажатии сабмит-->
                    {{Form::text('email')}}
                    {{Form::submit('submit')}}
                    {!! Form::close() !!}
<!-- ALERT ALERT ALERT               aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   -->
                  </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</body>

</html>
