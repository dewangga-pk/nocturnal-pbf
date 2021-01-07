@extends('admin.layouts.app')
@section('title','Edit User')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('/admin/users')}}">List of Users</a></div>
                    <div class="breadcrumb-item">Edit User</div>
                </div>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Fulfill User Information</h4>
                    </div>
                    <form action="{{route('users.update',["user"=>$user->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="user-username">Full Name</label>
                                    <input type="text" class="form-control" id="user-username" placeholder="Username" value="{{$user->name}}" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user-password">Password</label>
                                    <input type="password" class="form-control" id="user-password" placeholder="Password" value="" name="password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="user-email">Email</label>
                                    <input type="email" class="form-control" id="user-email" placeholder="Email" value="{{$user->email}}" name="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user-postalCode">Postal Code</label>
                                    <input type="text" class="form-control" id="user-postalCode" value="{{$user->postal_code}}" name="postalCode">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="province">Province</label>
                                    <select id="province" class="form-control" name="province">
                                        <option disabled>Choose Province</option>
                                        @foreach($indonesia as $province => $city)
                                            @if($province == $user->province)
                                                <option value="{{$province}}" selected>{{$province}}</option>
                                            @else
                                                <option value="{{$province}}">{{$province}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <select id="city" class="form-control" name="city">
                                        <option disabled>Choose City</option>
                                        @if($user->province!=null)
                                            @foreach($indonesia[$user->province] as $city)
                                                @if($city == $user->city)
                                                    <option value="{{$city}}" selected>{{$city}}</option>
                                                @else
                                                    <option value="{{$city}}">{{$city}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="user-phone">Phone Number</label>
                                    <input type="text" id="user-phone" class="form-control" value="{{$user->phone_number}}" name="phoneNumber">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user-address">Address</label>
                                    <input type="text" class="form-control" id="user-address" placeholder="Eg. Jl Kalimantan No.58..." value="{{$user->full_address}}" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script_library')
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
