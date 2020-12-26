<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('img/logo/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/home-1.css')}}">
</head>

<body>
<header class="header-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <ul class="header-info">
                    <li><i class="fas fa-envelope"></i>
                        <p>info@hydrostore.in</p>
                    </li>
                    <li><i class="fas fa-phone-alt"></i>
                        <p>+6211111111111</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="header-option">
                    <div class="header-curr">
                        <i class="fas fa-money-bill"></i>
                        <label>
                            <select class="header-select custom-select">
                                <option class="clr" selected>Rupiah</option>
                            </select>
                        </label>
                    </div>
                    <div class="header-lang">
                        <i class="fas fa-globe"></i>
                        <label>
                            <select class="header-select custom-select">
                                <option class="clr" selected>English</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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
<div class="btmbar-part">
    <ul class="btmbar-widget">
        <li>
            <a href="home-1.html"><i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="singles/wishlist.html" class="wish-icon"><i class="fas fa-heart"></i>
                <span>Wishlist</span><sup>0</sup>
            </a>
        </li>
        <li>
            <a href="singles/cartlist.html" class="cart-icon"><i class="fas fa-shopping-basket"></i>
                <span>Cart</span><sup>0</sup>
            </a>
        </li>
        <li>
            <a href="singles/account.html"><i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</div>
<main class="banner-part slider-arrow slider-dots">
    <section class="banner-1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-6"></div>
                <div class="col-md-7 col-lg-6">
                    <div class="banner-content-1">
                        <h1>Stay healthy life with vegans food.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit illum nesciunt,
                            pariatur explicabo nemo!</p>
                        <a class="btn btn-inline" href="{{url('/shop')}}">
                            <i class="fas fa-shopping-basket"></i>
                            <span>shop now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-2">
                        <h1>Healthy food comes form healthy ingredients.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit illum nesciunt,
                            pariatur explicabo nemo!</p>
                        <a class="btn btn-inline" href="{{url('/shop')}}">
                            <i class="fas fa-shopping-basket"></i>
                            <span>shop now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="banner-content-3">
                        <h1>Make your food organic and vegan.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit illum nesciunt,
                            pariatur explicabo nemo!</p>
                        <a class="btn btn-inline" href="{{url('/shop')}}">
                            <i class="fas fa-shopping-basket"></i>
                            <span>shop now</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6"></div>
            </div>
        </div>
    </section>
</main>

<section class="section trend-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="title">Trending products</h2>
                    <a href="singles/product-list-1.html" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider slider-arrow">
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/01.png')}}" alt="product-1">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn">
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/02.png')}}" alt="product-2">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn">
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/03.png')}}" alt="product-3">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn">
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/04.png')}}" alt="product-4">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn">
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/05.png')}}" alt="product-5">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/06.png')}}" alt="product-6">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section best-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="title">Best selling products</h2>
                    <a href="singles/product-list-1.html" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider slider-arrow">
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/06.png')}}" alt="product-6">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/07.png')}}" alt="product-7">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/08.png')}}" alt="product-8">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/09.png')}}" alt="product-9">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/10.png')}}" alt="product-10">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/11.png')}}" alt="product-11">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section new-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="title">New products</h2>
                    <a href="singles/product-list-1.html" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider slider-arrow">
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/11.png')}}" alt="product-11">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/12.png')}}" alt="product-12">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/13.png')}}" alt="product-13">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/14.png')}}" alt="product-14">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/15.png')}}" alt="product-15">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-img"><img src="{{asset('img/product/10.png')}}" alt="product-10">
                            <ul class="product-widget">
                                <li><button><i class="fas fa-eye"></i></button></li>
                                <li><button><i class="fas fa-heart"></i></button></li>
                                <li><button><i class="fas fa-exchange-alt"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h6><a href="#">Heirloom Quinoa</a></h6>
                            </div>
                            <div class="product-price">
                                <h6><del>$80</del>$150</h6>
                                <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                            </div>
                            <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="title">Our latest blogs</h2>
                    <a href="singles/blog-list-1.html" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="blog-slider slider-arrow">
                    <div class="blog-card">
                        <div class="blog-img"><img src="{{asset('img/blog/01.jpg')}}" alt="blog-1"></div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i><span>02 feb 2020</span></li>
                                <li><i class="far fa-comments"></i><span>18 comments</span></li>
                            </ul>
                            <div class="blog-text">
                                <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                            </div>
                            <div class="read-btn"><a href="#">read more <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img"><img src="{{asset('img/blog/02.jpg')}}" alt="blog-2"></div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i><span>02 feb 2020</span></li>
                                <li><i class="far fa-comments"></i><span>18 comments</span></li>
                            </ul>
                            <div class="blog-text">
                                <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                            </div>
                            <div class="read-btn"><a href="#">read more <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img"><img src="{{asset('img/blog/03.jpg')}}" alt="blog-3"></div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i><span>02 feb 2020</span></li>
                                <li><i class="far fa-comments"></i><span>18 comments</span></li>
                            </ul>
                            <div class="blog-text">
                                <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                            </div>
                            <div class="read-btn"><a href="#">read more <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="side-blog">
                    <div class="blog-list">
                        <div class="blog-list-img"><img src="{{asset('img/blog/list-1.jpg')}}" alt="blog-list-1"></div>
                        <div class="blog-list-content">
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i><span>02 feb 2020</span></li>
                                <li><i class="far fa-comments"></i><span>18 comments</span></li>
                            </ul>
                            <div class="blog-text">
                                <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-list">
                        <div class="blog-list-img"><img src="{{asset('img/blog/list-2.jpg')}}" alt="blog-list-2"></div>
                        <div class="blog-list-content">
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i><span>02 feb 2020</span></li>
                                <li><i class="far fa-comments"></i><span>18 comments</span></li>
                            </ul>
                            <div class="blog-text">
                                <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-list">
                        <div class="blog-list-img"><img src="{{asset('img/blog/list-3.jpg')}}" alt="blog-list-3"></div>
                        <div class="blog-list-content">
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i><span>02 feb 2020</span></li>
                                <li><i class="far fa-comments"></i><span>18 comments</span></li>
                            </ul>
                            <div class="blog-text">
                                <h3><a href="#">How to Make Your Breakfast Easy and Yummy...</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-part">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="feature-card"><i class="flaticon-delivery-truck"></i>
                    <h3>Free Delivery</h3>
                    <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="feature-card"><i class="flaticon-save-money"></i>
                    <h3>Instant Return</h3>
                    <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="feature-card"><i class="flaticon-customer-service"></i>
                    <h3>Quick Support</h3>
                    <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news-part">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-6">
                <div class="news-content">
                    <h2>Subscribe for Latest Offers</h2>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <form class="search-form news-form"><input type="text" placeholder="Enter Email Address"><button
                        class="btn btn-inline"><i class="fas fa-envelope"></i><span>Subscribe</span></button></form>
            </div>
        </div>
    </div>
</section>
<footer class="footer-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-content"><a href="#"><img src="{{asset('img/logo/01.png')}}" alt="logo"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae quisquam
                        adipisci asperiores, ipsum ipsa repellat assumenda dolor perspiciatis.</p>
                    <ul class="footer-icon">
                        <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="icon icon-inline" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-content">
                    <h3 class="title">Useful Links</h3>
                    <div class="footer-widget">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Best Seller</a></li>
                            <li><a href="#">New Arrivals</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Carrer</a></li>
                            <li><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="footer-content">
                    <h3 class="title">Download the App</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dicta amet tenetur soluta
                        blanditiis at optio molestias facilis praesentium eos! Sed placeat a labore corporis aliquam
                        reiciendis eaque quisquam corrupti.</p>
                </div>
                <ul class="download-app">
                    <li><a href="#"><img src="{{asset('img/logo/google.png')}}" alt="google"></a></li>
                    <li><a href="#"><img src="{{asset('img/logo/app.png')}}" alt="app"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <p>Copyright &copy; 2020 | All rights reserved by - <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
        <ul class="pay-card">
            <li><a href="#"><img src="{{asset('img/pay-card/01.jpg')}}" alt="payment-1"></a></li>
            <li><a href="#"><img src="{{asset('img/pay-card/02.jpg')}}" alt="payment-2"></a></li>
            <li><a href="#"><img src="{{asset('img/pay-card/03.jpg')}}" alt="payment-3"></a></li>
            <li><a href="#"><img src="{{asset('img/pay-card/04.jpg')}}" alt="payment-4"></a></li>
        </ul>
    </div>
</div>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendor/slick.min.js')}}"></script>
<script src="{{asset('js/custom/slick.js')}}"></script>
<script src="{{asset('js/custom/main.js')}}"></script>
</body>
