@extends('layouts.app')

@section('title','My Account')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/account.css')}}">
@endpush
@section('content')
    <form action="{{url('/logout')}}" method="POST" id="logout">
        @csrf
    </form>
    <section class="account-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-menu">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#pro" class="nav-link active" data-toggle="tab">Profile</a>
                            </li>
                            <li>
                                <a href="#order" class="nav-link" data-toggle="tab">Orders</a>
                            </li>
                            <li>
                                <a href="#sett" class="nav-link" data-toggle="tab">Settings</a>
                            </li>
                            <li><span class="nav-link" style="cursor: pointer;" onclick="event.preventDefault();
                                document.getElementById('logout').submit();">Logout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="pro">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>My Profile</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Profile Information</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Full Name:</h6>
                                    <p>{{auth()->user()->name}}</p>
                                </li>
                                <li>
                                    <h6>Email:</h6>
                                    <p>{{auth()->user()->email}}</p>
                                </li>
                                <li>
                                    <h6>Phone:</h6>
                                    <p>{{auth()->user()->phone_number}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Address</h3>
                                <a href="#sett">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Post Code:</h6>
                                    <p>{{auth()->user()->postal_code}}</p>
                                </li>
                                <li>
                                    <h6>Full Address:</h6>
                                    <p>{{auth()->user()->full_address}}</p>
                                </li>
                                <li>
                                    <h6>City:</h6>
                                    <p>{{auth()->user()->city}}</p>
                                </li>
                                <li>
                                    <h6>Province:</h6>
                                    <p>{{auth()->user()->province}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="order">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Order History</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="order-content">
                            <table class="table-list">
                                <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Total</th>
{{--                                    <th scope="col">Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td class="table-order">
                                            <p>{{$transaction->invoice}}</p>
                                        </td>
                                        <td class="table-date">
                                            <p>{{date('m d, Y',strtotime($transaction->created_at))}}</p>
                                        </td>
                                        <td class="table-status">
                                            <p>{{$transaction->status == 1? "Waiting Verification" : ($transaction->status == 2 ? "In Process": ($transaction->status == 3 ? "On the way" : ($transaction->status == 4 ? "Complete" : "Decline")))}}</p>
                                        </td>
                                        <td class="table-product">
                                            <p>{{$transaction->itemsSelecteds_count}} Item</p>
                                        </td>
                                        <td class="table-total">
                                            <p>Rp. {{number_format($transaction->total,0,',','.')}},-</p>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="sett">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>User Information</h2>
                        </div>
                        <form class="settings-form" method="POST" action="{{route('account.update',["id" => auth()->id()])}}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fname" class="form-label">First Name:</label><input type="text" id="fname" class="form-control" placeholder="Dewangga" name="frontName" value="{{explode(" ",auth()->user()->name)[0]}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lname" class="form-label">Last Name:</label><input type="text" id="lname" class="form-control" placeholder="Penjahat K" name="behindName" value="{{explode(" ",auth()->user()->name)[1] ?? ""}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address:</label><input type="text" id="address" class="form-control" placeholder="Jl. Kalimantan" name="address" value="{{auth()->user()->full_address}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state" class="form-label">Province:</label><select id="province" class="form-control" name="province" value="{{auth()->user()->province}}">
                                            <option selected disabled>Choose...</option>
                                            @foreach($indonesia as $province => $city)
                                                @if($province == auth()->user()->province)
                                                    <option value="{{$province}}" selected>{{$province}}</option>
                                                @else
                                                    <option value="{{$province}}">{{$province}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state" class="form-label">City:</label><select id="city" class="form-control" name="city" value="{{auth()->user()->city}}">
                                            @if(auth()->user()->province != null)
                                                @foreach($indonesia[auth()->user()->province] as $city)
                                                    @if($city == auth()->user()->city)
                                                        <option value="{{$city}}" selected>{{$city}}</option>
                                                    @else
                                                        <option value="{{$city}}">{{$city}}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pcode" class="form-label">Post Code:</label><input type="text" id="pcode" class="form-control" placeholder="1100" name="postalCode" value="{{auth()->user()->postal_code}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email:</label><input type="text" id="email" class="form-control" placeholder="
DewanggaPenjahat@mail.com" name="email" value="{{auth()->user()->email}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="pnumber" class="form-label">Phone Number:</label><input type="text" id="pnumber" class="form-control" placeholder="+12027953213" name="phoneNumber" value="{{auth()->user()->phone_number}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-btn">
                                        <button type="submit" class="btn btn-inline">
                                            <i class="fas fa-user-check"></i><span>update info</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var indonesia = @json($indonesia);
        $('#province').change(function () {
            $('#city')
                .find('option')
                .remove()
                .end()
                .append('<option disabled selected>Choose Your City</option>');
            var province = $("#province option:selected").val();
            var cities = indonesia[province];
            for (let i = 0; i < cities.length; i++) {
                $("#city").append('<option value="'+cities[i]+'">'+cities[i]+'</option>')
            }
        })
    </script>
@endpush

