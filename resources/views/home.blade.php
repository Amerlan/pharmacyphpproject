<!DOCTYPE html>
<body>
  <head>
    <meta charset="utf-8">
    <title>ReadHome</title>

 @include('layouts.style')
  <body>

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
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="shop">Shop</a></li>
                    <li><a href="product_details">Product</a></li>
                    <li><a href="cart">Cart</a></li>
                    <li><a href="checkout">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#discount" class="btn amado-btn mb-15">% Discount %</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart" class="cart-nav"><img src="https://sun9-40.userapi.com/c857636/v857636045/1bd091/QRA00czx00Q.jpg" alt=""> Cart <span>(0)</span></a>
                <a href="login" class="search-nav"><img src="https://sun9-26.userapi.com/c857636/v857636045/1bd08a/Qjio1hnGLlw.jpg" alt=""> Login</a>
            </div>
      </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop">

                        <div class="hover-content">
                            <p>From $180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop">
                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/c/o/cover1_55_92.jpg" height = "150px" width = "150px" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $18</p>
                            <h4>Plant Pot</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/_/a/_a54817d481539d36ba4c9f48907f39bff0c41a60b7876926a0_pimgpsh_fullsize_distr.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $320</p>
                            <h4>Small Table</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/1/0/1018520_0.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Metallic Chair</h4>
                        </div>
                    </a>
                </div>



                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/migrated/article/22477/58_tn3.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Home Deco</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
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
                        <p>Do you want to take discount? Subsribe for us. We will not annoy you with a lot of messages.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5" id = 'discount'>
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


</body>
