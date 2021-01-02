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
                                    <p>Dewangga PK</p>
                                </li>
                                <li>
                                    <h6>Email:</h6>
                                    <p>DewanggaPenjahat@mail.com</p>
                                </li>
                                <li>
                                    <h6>Phone:</h6>
                                    <p>+12027953213</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Address</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Post Code:</h6>
                                    <p>1100</p>
                                </li>
                                <li>
                                    <h6>Full Address:</h6>
                                    <p>Jl. Kalimantan</p>
                                </li>
                                <li>
                                    <h6>City:</h6>
                                    <p>Jember</p>
                                </li>
                                <li>
                                    <h6>Province:</h6>
                                    <p>East Java</p>
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
                                <tr>
                                    <td class="table-order">
                                        <p>01</p>
                                    </td>
                                    <td class="table-date">
                                        <p>May 10, 2018</p>
                                    </td>
                                    <td class="table-status">
                                        <p>Completed</p>
                                    </td>
                                    <td class="table-product">
                                        <p>4 Item</p>
                                    </td>
                                    <td class="table-total">
                                        <p>Rp. 320.000,-</p>
                                    </td>
{{--                                    <td class="table-action">--}}
{{--                                        <a href="#"><i class="fas fa-eye"></i></a><a href="#"><i--}}
{{--                                                class="fas fa-trash-alt"></i></a>--}}
{{--                                    </td>--}}
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="order-btn">
                            <a href="#" class="btn btn-inline"><i class="fas fa-eye"></i>show more</a>
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
                        <form class="settings-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fname" class="form-label">First Name:</label><input type="text" id="fname" class="form-control" placeholder="Dewangga" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lname" class="form-label">Last Name:</label><input type="text" id="lname" class="form-control" placeholder="Penjahat K" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address:</label><input type="text" id="address" class="form-control" placeholder="Jl. Kalimantan" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state" class="form-label">Province:</label><select id="province" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state" class="form-label">City:</label><select id="city" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pcode" class="form-label">Post Code:</label><input type="text" id="pcode" class="form-control" placeholder="1100" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email:</label><input type="text" id="email" class="form-control" placeholder="
DewanggaPenjahat@mail.com" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pnumber" class="form-label">Phone Number:</label><input type="text" id="pnumber" class="form-control" placeholder="+12027953213" />
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
