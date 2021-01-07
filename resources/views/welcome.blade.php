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
                    <a href="{{url('/shop')}}" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider slider-arrow">
                    @foreach($bestItem as $best)
                        <div class="product-card card-gape">
                            <div class="product-img"><img src="{{url('/storage/products/'.$best->image)}}" alt="product-1">
                                <ul class="product-widget">
                                    <li><button><a href="{{url('/shop/product/'.$best->id)}}"><i class="fas fa-eye"></i></a></button></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <div class="product-name">
                                    <h6><a href="{{url('/shop/product/'.$best->id)}}">{{$best->item_name}}</a></h6>
                                </div>
                                <div class="product-price">
                                    <h6>
                                        Rp. {{number_format($best->price,0,',','.')}}
                                    </h6>
                                </div>
                                <div class="product-btn"><a href="{{url('/shop/product/'.$best->id)}}"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                            </div>
                        </div>
                    @endforeach
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
                    <a href="{{url('/shop')}}" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider slider-arrow">
{{--                    start loop--}}
                    @foreach($trend as $best)
                        <div class="product-card card-gape">
                            <div class="product-img"><img src="{{url('/storage/products/'.$best->image)}}" alt="product-1">
                                <ul class="product-widget">
                                    <li><button><a href="{{url('/shop/product/'.$best->id)}}"><i class="fas fa-eye"></i></a></button></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <div class="product-name">
                                    <h6><a href="{{url('/shop/product/'.$best->id)}}">{{$best->item_name}}</a></h6>
                                </div>
                                <div class="product-price">
                                    <h6>
                                        Rp. {{number_format($best->price,0,',','.')}}
                                    </h6>
                                </div>
                                <div class="product-btn"><a href="{{url('/shop/product/'.$best->id)}}"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                            </div>
                        </div>
                    @endforeach
{{--                    end loop--}}
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
                    <a href="/shop" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        show more
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider slider-arrow">
{{--                    start card for loop--}}
                    @foreach($fresh as $best)
                        <div class="product-card card-gape">
                            <div class="product-img"><img src="{{url('/storage/products/'.$best->image)}}" alt="product-1">
                                <ul class="product-widget">
                                    <li><button><a href="{{url('/shop/product/'.$best->id)}}"><i class="fas fa-eye"></i></a></button></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <div class="product-name">
                                    <h6><a href="{{url('/shop/product/'.$best->id)}}">{{$best->item_name}}</a></h6>
                                </div>
                                <div class="product-price">
                                    <h6>
                                        Rp. {{number_format($best->price,0,',','.')}}
                                    </h6>
                                </div>
                                <div class="product-btn"><a href="{{url('/shop/product/'.$best->id)}}"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                            </div>
                        </div>
                    @endforeach
{{--                    end loop--}}
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
                    <p>Get Free Shipping on all orders!</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="feature-card"><i class="flaticon-save-money"></i>
                    <h3>Instant Return</h3>
                    <p>Easy instant return</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="feature-card"><i class="flaticon-customer-service"></i>
                    <h3>Quick Support</h3>
                    <p>The customer is always right.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
