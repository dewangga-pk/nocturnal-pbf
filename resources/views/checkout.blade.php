@extends('layouts.app')
@section('title','Checkout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/checkout.css')}}">
@endpush
@section('content')
    <section class="checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-action"><i class="fas fa-external-link-alt"></i>
                        <span>Returning customer?<a href="{{url('/login-signup')}}">Click here to login</a></span>
                    </div>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row checkout-form">
                            <div class="col-lg-12">
                                <div class="check-form-title">
                                    <h3>Billing Address</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Company"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Address"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="City"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Post Code"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Country"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="State"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Phone Number"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row checkout-form">
                            <div class="col-lg-12">
                                <div class="check-form-title">
                                    <h3>Shipping Address</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Company"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Address"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="City"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Post Code"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Country"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="State"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Phone Number"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row checkout-table">
                    <div class="col-lg-12">
                        <div class="check-form-title">
                            <h3>Confirm Order</h3>
                        </div>
                        <div class="table-scroll">
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
                    <div class="col-lg-12">
                        <div class="checkout-charge">
                            <ul>
                                <li><span>Shipping Charge</span><span>Rp. 100.000,-</span></li>
                                <li><span>Subtotal</span><span>Rp. 180.450,-</span></li>
                                <li><span>Total</span><span>RP. 480.000,-</span></li>
                            </ul>
                        </div>
                        <div class="check-order-btn">
                            <button class="btn btn-inline">
                                <i class="fas fa-paper-plane"></i>
                                <span>Place order</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
