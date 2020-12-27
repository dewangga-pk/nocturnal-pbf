@extends('layouts.app')
@section('title','Cart List')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/cartlist.css')}}">
@endpush
@section('content')
    <section class="cart-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-list">
                        <table class="table-list">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="table-number">
                                    <h5>01</h5>
                                </td>
                                <td class="table-product"><img src="{{asset('img/product/01.png')}}" alt="product-1">
                                </td>
                                <td class="table-name">
                                    <h5>Heriloom Quinoa</h5>
                                </td>
                                <td class="table-price">
                                    <h5>Rp. 250.000,-</h5>
                                </td>
                                <td class="table-quantity"><input type="number" placeholder="0"></td>
                                <td class="table-total">
                                    <h5>Rp. 500.000,-</h5>
                                </td>
                                <td class="table-action"><a href="{{url('/product-details')}}"><i class="fas fa-eye"></i></a><a href="#"><i
                                            class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="cart-back"><a href="{{url('/shop')}}" class="btn btn-inline"><i
                                class="fas fa-undo-alt"></i><span>Back to Shop</span></a></div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="cart-cupon"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-totals">
                        <h2 class="title">Cart Totals</h2>
                        <ul>
                            <li><span>Shipping Charge</span><span>Rp. 100.000,-</span></li>
                            <li><span>Subtotal</span><span>Rp. 180.450,-</span></li>
                            <li><span>Total</span><span>RP. 480.000,-</span></li>
                        </ul>
                    </div>
                    <div class="cart-proceed"><a href="{{url('/checkout')}}" class="btn btn-inline"><i
                                class="fas fa-check"></i><span>Proceed to Checkout</span></a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
