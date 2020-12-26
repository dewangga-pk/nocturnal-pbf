<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-element">
                    <ul class="left-widget">
                        <li><a class="icon icon-inline menu-bar" href="#"><i class="fas fa-align-left"></i></a></li>
                    </ul><a class="navbar-logo" href="{{url('/')}}"><img src="{{asset('img/logo/01.png')}}" alt="logo"></a>
                    <form class="search-form navbar-src">
                        <input type="text" placeholder="Search anything...">
                        <button class="btn btn-inline"><i class="fas fa-search"></i>
                            <span>search</span>
                        </button>
                    </form>
                    <ul class="right-widget">
                        <li><a class="icon icon-inline" href="singles/signin-up.html"><i class="fas fa-user"></i></a></li>
                        <li><a class="icon icon-inline" href="singles/wishlist.html"><i class="fas fa-heart"></i><sup>0</sup></a></li>
                        <li><a class="icon icon-inline" href="{{url('/cart')}}"><i class="fas fa-shopping-cart"></i><sup>0</sup></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-slide">
                    <div class="navbar-content">
                        <div class="navbar-slide-cross"><a class="icon icon-inline cross-btn" href="#"><i class="fas fa-times"></i></a></div>
                        <div class="navbar-slide-logo"><a href="#"><img src="{{asset('img/logo/01.png')}}" alt="logo"></a></div>
                        <form class="search-form mb-4 navbar-slide-src">
                            <input type="text" placeholder="Search anything...">
                            <button class="btn btn-inline"><i class="fas fa-search"></i>
                                <span>search</span>
                            </button>
                        </form>
                        <ul class="navbar-list">
                            <li class="navbar-item active"><a class="navbar-link" href="{{url('/')}}">Home</a></li>
                            <li class="navbar-item navbar-dropdown navbar-megamenu"><a class="navbar-link dropdown-indicator" href="#"><span>Categories</span><i class="fas fa-chevron-down"></i></a>
                                <div class="megamenu">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-seaweed"></i><span>Seeds (14)</span></a></li>
                                        <li><a href="#"><i class="flaticon-spread"></i><span>Equipment (36)</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="navbar-item navbar-dropdown"><a class="navbar-link dropdown-indicator" href="#"><span>Shop</span><i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="{{url('/shop')}}">Product list-3</a></li>
                                    <li><a class="dropdown-link" href="{{url('/product-details')}}">Product details-2</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown"><a class="navbar-link dropdown-indicator" href="#"><span>pages</span><i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="{{url('/cart')}}">Cart list</a></li>
                                    <li><a class="dropdown-link" href="singles/wishlist.html">Wishlist</a></li>
                                    <li><a class="dropdown-link" href="{{url('/checkout')}}">Checkout</a></li>
                                    <li><a class="dropdown-link" href="singles/compare.html">Compare</a></li>
                                    <li><a class="dropdown-link" href="{{url('/account')}}">Account</a></li>
                                    <li><a class="dropdown-link" href="{{url('/login-signup')}}">Login or Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
