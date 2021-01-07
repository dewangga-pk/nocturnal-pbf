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
                        <img src="/storage{{$product->image}}" alt="product-1">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="product-name">
                        <h3>{{$product->item_name}}</h3>
                    </div>
                    <div class="product-price">
                        <p>
                            Rp. {{number_format($product->price,0,',','.')}}
                        </p>
                    </div>
                    <div class="product-summery">
                        <p>{{$product->item_description}}</p>
                    </div>
                    <div class="product-cart">
                        <ul>
                            <form action="/shop/cart/add" method="POST">
                                @csrf
                                <input type="hidden" name="item_id" value="{{$product->id}}">
                                <li><input type="number" placeholder="0" name="quantity" value="{{old('quantity') ?? 0}}"></li>
                                <li><button type="submit" class="btn btn-outline"><i class="fas fa-shopping-basket"></i><span>add to
                                            cart</span></button></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
