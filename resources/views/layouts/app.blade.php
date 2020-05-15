<?php
$searchfill = $data[rand(0,5)]->title ?? '';
$stat = $status ?? 0;
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ReadHome</title>

    <!-- Favicon  -->

    <link rel="shortcut icon" href="{{asset('images/icon.png')}}" type="image/png">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('cont/css/core-style.css')}}">


    <!--FOR CARD PAYMENT CHECKOUT -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>

<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($stat === 1)
<script>swal("You already subscribed!");</script>
@endif
@if ($stat ===2)
<script>
swal({
  title: "Check the email!",
  icon: "success",
  button: "Let's shopping!",
});
</script>
@endif
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id = 'search'>
              <form action="{{ route('search')}}" method="post">
                @csrf
                <input id = 'searchcss' type="search" name="search" placeholder="{{$searchfill}}">
                <button id = 'searchcss' type="submit">Search</button>
              </form>
            </div>
              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="cart" class="cart-nav" style="text-decoration: none;">
                      <span class="iconify" data-icon="el:shopping-cart-sign" data-inline="false" data-width="24" data-height="24"></span>
                      {{ !Auth::guest() ? Session::has('cart') ? '('.Session::get('cart')->totalqty.')' : '' : ''}}
                     </a>
                </li>

                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                  @endguest
              </ul>
          </div>

      </div>

  </nav>
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
                    <li class ={{ URL::current() == 'http://127.0.0.1:8000/home' ? 'active' : ''}}><a href="home">Home</a></li>
                    <li class ={{ URL::current() == 'http://127.0.0.1:8000/shop' ? 'active' : ''}}><a href="shop">Shop</a></li>
                    @if (!Auth::guest())
                    @if (Auth::user()->role['slug']=='admin')
                    <li class ={{ URL::current() == 'http://127.0.0.1:8000/add' ? 'active' : ''}}><a href="add">Add items</a></li>
                    @endif
                    @endif
                    <li class ={{ URL::current() == 'http://127.0.0.1:8000/cart' ? 'active' : ''}}><a href={{ route('product.shoppingcart') }}>Cart</a></li>
                    <li class ={{ URL::current() == 'http://127.0.0.1:8000/checkout' ? 'active' : ''}}><a href="checkout">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#discount" class="amado-btn mb-15">%Discount%</a>
            </div>

        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->

                <!-- Single Catagory -->
                  @yield('content')


        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area">
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
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                      <form action="{{route('discount')}}" method="post">
                        @csrf
                          <input type="email" name="email" class="nl-email" placeholder="Your E-mail" id = 'discount'>
                          <input type="submit" value="Subscribe">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">

                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="">
</div>
    </footer>
    <!-- ##### Footer Area End ##### -->
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.payform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <!-- Popper js -->
    <script src="{{asset('cont/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->

    <!-- Plugins js -->
    <script src="{{asset('cont/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('cont/js/active.js')}}"></script>

</body>

</html>
