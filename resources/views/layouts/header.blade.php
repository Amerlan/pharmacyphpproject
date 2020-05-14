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
        <a href="#discount" class="btn amado-btn mb-15">% Discount %</a>
    </div>
    <!-- Cart Menu -->

</header>
