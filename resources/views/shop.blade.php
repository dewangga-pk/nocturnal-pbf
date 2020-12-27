@extends('layouts.app')
@section('title','Shop')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/product-list-3.css')}}">
@endpush
@section('content')
    <section class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

{{--                    Sort--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter">
                                <div class="product-page-number">
                                    <p>Showing 1–9 of 130 results</p>
                                </div><select class="product-short-select custom-select">
                                    <option selected>Sort by Best Sell</option>
                                    <option value="1">Sort by New Item</option>
                                    <option value="2">Sort by Popularity</option>
                                    <option value="3">Sort by Average review</option>
                                </select>
                            </div>
                        </div>
                    </div>

{{--                    Produk--}}
                    <div class="row product-card-parent">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/01.png')}}" alt="product-1">
                                    <ul class="product-widget">
                                        <li><button><a href="{{url('/product-details')}}"><i class="fas fa-eye"></i></a></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="{{url('/product-details')}}">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6>
                                            {{--<del>$80</del>--}} {{--kalo diskon--}}
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    Pagination--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">67</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
