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
                        <span>Want to change adrress?<a href="{{route('account.index')}}">Click here to update your address in profile</a></span>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{url('/transaction')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row checkout-form">
                            <div class="col-lg-12">
                                <div class="check-form-title">
                                    <h3>Shipping Address</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" readonly class="form-control"
                                                               placeholder="First Name" value="{{explode(" ",auth()->user()->name)[0]}}"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" readonly class="form-control" placeholder="Last Name" value="{{explode(" ",auth()->user()->name)[1] ?? ""}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="text" readonly class="form-control" placeholder="Address" value="{{auth()->user()->full_address}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" disabled value="{{auth()->user()->province}}">
                                        <option value="{{auth()->user()->province}}">{{auth()->user()->province}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" disabled value="{{auth()->user()->city}}">
                                        <option value="{{auth()->user()->city}}">{{auth()->user()->city}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input readonly type="text" class="form-control" placeholder="Post Code" value="{{auth()->user()->postal_code}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input readonly type="text" class="form-control"
                                                               placeholder="Phone Number" value="{{auth()->user()->phone_number}}"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input readonly type="text" class="form-control" placeholder="Email" value="{{auth()->user()->email}}">
                                </div>
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
                                @foreach($carts as $cart)
                                <tr>
                                    <td class="table-number">
                                        <h5>{{$cart->id}}</h5>
                                    </td>
                                    <td class="table-product"><img src="/storage{{$cart->item->image}}"
                                                                   alt="product-1">
                                    </td>
                                    <td class="table-name">
                                        <h5>{{$cart->item->item_name}}</h5>
                                    </td>
                                    <td class="table-price">
                                        <h5>Rp. {{number_format($cart->item->price,0,',','.')}},-</h5>
                                    </td>
                                    <td class="table-quantity"><input type="number" placeholder="0" value="{{$cart->quantity}}"  readonly></td>
                                    <td class="table-total">
                                        <h5>Rp. {{number_format($cart->quantity*$cart->item->price)}},-</h5>
                                    </td>
                                    <td class="table-action"><a href="{{url('/shop/product/'.$cart->item->id)}}"><i
                                                class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-charge">
                            <ul>
                                <li><span>Shipping Charge</span><span>Rp. 0,-</span></li>
                                <li><span>Subtotal</span><span>Rp. {{number_format($total,0,',','.')}},-</span></li>
                                <li><span>Total</span><span>RP. {{number_format($total,0,',','.')}},-</span></li>
                            </ul>
                        </div>
                        <div class="drop-zone">
                            <span class="drop-zone__prompt">Upload Payment Proof</span>
                            <input type="file" name="proof" class="drop-zone__input">
                        </div>
                        <div class="check-order-btn">
                            @if(auth()->user()->province !== null && auth()->user()->city !== null && auth()->user()->postal_code !== null)
                            <button class="btn btn-inline" type="submit">
                                <i class="fas fa-paper-plane"></i>
                                <span>Place order</span>
                            </button>
                                @else
                            <span>Complete personal data before buying. <a href="{{url('/account')}}">Here</a></span>
                                @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
