@extends('layouts.app')
@section('title','Home')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/home-1.css')}}">
@endpush
@section('content')
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
                        <a class="btn btn-inline" href="singles/product-list-1.html">
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
                        <a class="btn btn-inline" href="singles/product-list-1.html">
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
                        <a class="btn btn-inline" href="singles/product-list-1.html">
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

@endsection
