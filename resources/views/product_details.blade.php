@extends('layouts.app')
@section('title','Product Details')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/product-details-2.css')}}">
@endpush
@section('content')
    <section class="product-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="preview-slider slider-arrow">
                        <img src="{{asset('img/product/01.png')}}" alt="product-1">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="product-name">
                        <h3>Heirloom Quinoa</h3>
                    </div>
{{--                    <div class="product-review">--}}
{{--                        <ul>--}}
{{--                            <li><i class="fas fa-star"></i></li>--}}
{{--                            <li><i class="fas fa-star"></i></li>--}}
{{--                            <li><i class="fas fa-star"></i></li>--}}
{{--                            <li><i class="fas fa-star"></i></li>--}}
{{--                            <li><i class="fas fa-star"></i></li>--}}
{{--                            <li><a href="#">(2 Reviews)</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="product-price">
                        <p>
                            Rp. 125.000,-
                        </p>
                    </div>
                    <div class="product-summery">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore et. Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                    <div class="product-cart">
                        <ul>
                            <li><input type="number" placeholder="0"></li>
                            <li><a href="#" class="btn btn-outline"><i class="fas fa-shopping-basket"></i><span>add to
                                        cart</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
