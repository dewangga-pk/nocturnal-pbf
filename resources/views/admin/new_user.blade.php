@extends('admin.layouts.app')
@section('title','New User')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
                    <div class="breadcrumb-item">New User</div>
                </div>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Fulfill User Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="user-username">Username</label>
                                <input type="text" class="form-control" id="user-username" placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="user-password">Password</label>
                                <input type="password" class="form-control" id="user-password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="user-email">Email</label>
                                <input type="email" class="form-control" id="user-email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="user-fullname">Ful Name</label>
                                <input type="text" class="form-control" id="user-fullname" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="user-province">Province</label>
                                <select id="user-province" class="form-control">
                                    <option selected disabled>Choose Province</option>
                                    <option value="12">Jawa Timur</option>
                                    <option value="13">Bali</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="user-city">City</label>
                                <select id="user-city" class="form-control">
                                    <option selected disabled>Choose City</option>
                                    <option value="1">Jember</option>
                                    <option value="2">Banyuwangi</option>
                                    <option value="3">Bondowoso</option>
                                    <option value="4">Lumajang</option>
                                    <option value="5">Denpasar</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="user-postalCode">Postal Code</label>
                                <input type="text" class="form-control" id="user-postalCode">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="user-phone">Phone Number</label>
                                <input type="text" id="user-phone" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="user-address">Address</label>
                                <input type="text" class="form-control" id="user-address" placeholder="Eg. Jl Kalimantan No.58...">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
