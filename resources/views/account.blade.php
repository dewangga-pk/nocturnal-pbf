@extends('layouts.app')

@section('title','My Account')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/account.css')}}">
@endpush
@section('content')
    <section class="account-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-menu">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#dash" class="nav-link active" data-toggle="tab">Dashboard</a>
                            </li>
                            <li>
                                <a href="#pro" class="nav-link" data-toggle="tab">Profile</a>
                            </li>
                            <li>
                                <a href="#order" class="nav-link" data-toggle="tab">Orders</a>
                            </li>
                            <li>
                                <a href="#sett" class="nav-link" data-toggle="tab">Settings</a>
                            </li>
                            <li><a href="signin-up.html" class="nav-link">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="dash">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-dash">
                            <div class="alert fade show" role="alert">
                                <p>
                                    From your account dashboard. you can easily check & view
                                    your recent orders, manage your shipping and billing
                                    addresses and Edit your password and account details.
                                </p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Newsletter</h3>
                                <a href="#">Edit</a>
                            </div>
                            <div class="dash-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Adipisci dicta magnam itaque quia possimus magni. Incidunt
                                    magnam. Laboriosam suscipit cum quaerat itaque libero
                                    inventore! Harum obcaecati beatae quod aliquam debitis nam
                                    iure nulla deleniti itaque quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Contact Information</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Website:</h6>
                                    <p>www.richardwilliam.com</p>
                                </li>
                                <li>
                                    <h6>Email:</h6>
                                    <p>richard@example.com</p>
                                </li>
                                <li>
                                    <h6>Phone:</h6>
                                    <p>+12027953213</p>
                                </li>
                                <li>
                                    <h6>Skype:</h6>
                                    <p>live:richard</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Billing Address</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Post Code:</h6>
                                    <p>1420</p>
                                </li>
                                <li>
                                    <h6>State:</h6>
                                    <p>West Jalkuri</p>
                                </li>
                                <li>
                                    <h6>City:</h6>
                                    <p>Narayanganj</p>
                                </li>
                                <li>
                                    <h6>Country:</h6>
                                    <p>Bangladesh</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Shipping Address</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Post Code:</h6>
                                    <p>1100</p>
                                </li>
                                <li>
                                    <h6>State:</h6>
                                    <p>Kawran Bazar</p>
                                </li>
                                <li>
                                    <h6>City:</h6>
                                    <p>Dhaka</p>
                                </li>
                                <li>
                                    <h6>Country:</h6>
                                    <p>Bangladesh</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="pro">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Your Timeline</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Introduction</h3>
                                <a href="#">Edit</a>
                            </div>
                            <div class="profile-intro">
                                <div class="profile-author">
                                    <a href="#"><img src="{{asset('img/review/01.jpg')}}" alt="01" /></a>
                                    <h4>Richard Williamson</h4>
                                    <p><span>Joined:</span>02-02-2020</p>
                                </div>
                                <ul class="account-list">
                                    <li>
                                        <h6>Total Order:</h6>
                                        <p>07</p>
                                    </li>
                                    <li>
                                        <h6>Cencel Order:</h6>
                                        <p>02</p>
                                    </li>
                                    <li>
                                        <h6>Spend Money:</h6>
                                        <p>$98</p>
                                    </li>
                                    <li>
                                        <h6>Pending Order:</h6>
                                        <p>01</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Contact Information</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Website:</h6>
                                    <p>www.richardwilliam.com</p>
                                </li>
                                <li>
                                    <h6>Email:</h6>
                                    <p>richard@example.com</p>
                                </li>
                                <li>
                                    <h6>Phone:</h6>
                                    <p>+12027953213</p>
                                </li>
                                <li>
                                    <h6>Skype:</h6>
                                    <p>live:richard</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Billing Address</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Post Code:</h6>
                                    <p>1420</p>
                                </li>
                                <li>
                                    <h6>State:</h6>
                                    <p>West Jalkuri</p>
                                </li>
                                <li>
                                    <h6>City:</h6>
                                    <p>Narayanganj</p>
                                </li>
                                <li>
                                    <h6>Country:</h6>
                                    <p>Bangladesh</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h3>Shipping Address</h3>
                                <a href="#">Edit</a>
                            </div>
                            <ul class="account-list">
                                <li>
                                    <h6>Post Code:</h6>
                                    <p>1100</p>
                                </li>
                                <li>
                                    <h6>State:</h6>
                                    <p>Kawran Bazar</p>
                                </li>
                                <li>
                                    <h6>City:</h6>
                                    <p>Dhaka</p>
                                </li>
                                <li>
                                    <h6>Country:</h6>
                                    <p>Bangladesh</p>
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
                                    <th scope="col">Action</th>
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
                                        <p>$32.00</p>
                                    </td>
                                    <td class="table-action">
                                        <a href="#"><i class="fas fa-eye"></i></a><a href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-order">
                                        <p>02</p>
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
                                        <p>$32.00</p>
                                    </td>
                                    <td class="table-action">
                                        <a href="#"><i class="fas fa-eye"></i></a><a href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-order">
                                        <p>03</p>
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
                                        <p>$32.00</p>
                                    </td>
                                    <td class="table-action">
                                        <a href="#"><i class="fas fa-eye"></i></a><a href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-order">
                                        <p>04</p>
                                    </td>
                                    <td class="table-date">
                                        <p>May 10, 2018</p>
                                    </td>
                                    <td class="table-status">
                                        <p>Processing</p>
                                    </td>
                                    <td class="table-product">
                                        <p>4 Item</p>
                                    </td>
                                    <td class="table-total">
                                        <p>$32.00</p>
                                    </td>
                                    <td class="table-action">
                                        <a href="#"><i class="fas fa-eye"></i></a><a href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-order">
                                        <p>05</p>
                                    </td>
                                    <td class="table-date">
                                        <p>May 10, 2018</p>
                                    </td>
                                    <td class="table-status">
                                        <p>Processing</p>
                                    </td>
                                    <td class="table-product">
                                        <p>4 Item</p>
                                    </td>
                                    <td class="table-total">
                                        <p>$32.00</p>
                                    </td>
                                    <td class="table-action">
                                        <a href="#"><i class="fas fa-eye"></i></a><a href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
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
                                        <label for="fname" class="form-label">First Name:</label><input type="text" id="fname" class="form-control" placeholder="Mahmudul" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lname" class="form-label">Last Name:</label><input type="text" id="lname" class="form-control" placeholder="Hasan" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="cname" class="form-label">Company Name:</label><input type="text" id="cname" class="form-control" placeholder="Vegana food world limited" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address:</label><input type="text" id="address" class="form-control" placeholder="1420, West Jalkuri, Narayanganj, Bangladesh" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="city" class="form-label">City:</label><input type="text" id="city" class="form-control" placeholder="Narayanganj" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state" class="form-label">State:</label><select id="state" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pcode" class="form-label">Post Code:</label><input type="text" id="pcode" class="form-control" placeholder="1420" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="country" class="form-label">Country:</label><input type="text" id="country" class="form-control" placeholder="Bangladesh" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email:</label><input type="text" id="email" class="form-control" placeholder="mironcoder@gmail.com" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pnumber" class="form-label">Phone Number:</label><input type="text" id="pnumber" class="form-control" placeholder="+8801838288389" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bdate" class="form-label">Birthday:</label><input type="date" id="bdate" class="form-control" value="1995-02-02" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="file" class="form-label">Profile Image:</label><input type="file" id="file" class="form-control" />
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