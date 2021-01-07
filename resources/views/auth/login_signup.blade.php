@extends('auth.layouts.app')
@section('content')
<section class="sign-part">
    <div class="sign-content">
        <div class="content-cover"><a href="#"><img src="{{asset('img/logo/01.png')}}" alt="logo"></a>
            <h1>Biggest online vegan food ecommerce store in worldwide.</h1>
        </div>
    </div>
    <div class="sign-form">
        <div class="back-arrow"><a href="#"><img src="{{asset('img/logo/01.png')}}" alt="logo"></a>
            <a href="{{url('/')}}"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="sign-cate">
            <ul class="nav nav-tabs">
                <li><a href="#signin" class="nav-link active" data-toggle="tab">sign in</a></li>
                <li><a href="#signup" class="nav-link" data-toggle="tab">sign up</a></li>
            </ul>
        </div>
        <div class="tab-pane active" id="signin">
            <div class="sign-heading">
                <h2>Login</h2>
                <p>Use credentials to access your account.</p>
            </div>
            <form class="form" method="POST" action="{{url('/login')}}">
                @csrf
                <label class="form-label">
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <small>Ex ● bagusdarmawan@gmail.com</small>
                </label>
                <label class="form-label">
                    <input type="password" id="pass" placeholder="Password" name="password" required autocomplete="current-password">
                    <button type="button"><i class="eye fas fa-eye"></i></button>
                    <small>Password must be 8 characters</small>
                </label>
                <label class="form-link">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signin-check" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="signin-check">Remember me</label>
                    </div>
                </label>
                <label class="form-btn">
                    <button type="submit" class="btn btn-outline">sign in now</button>
                </label>
            </form>
            <div class="form-bottom">
                <p>Don't have an account? click on the <span>( sign up )</span>button above.</p>
            </div>
        </div>
        <div class="tab-pane" id="signup">
            <div class="sign-heading">
                <h2>Register</h2>
                <p>Setup a new account in a minute.</p>
            </div>
            <div class="or-text">
                <p>user</p>
            </div>
            <form class="form" method="POST" action="{{url('/register')}}">
                @csrf
                <label class="form-label">
                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <small>Ex ● bagusdarmawan@gmail.com</small>
                </label>
                <label class="form-label">
                    <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <small>Ex ● Bagus Darmawan</small>
                </label>
                <label class="form-label">
                    <input type="password" id="pass" placeholder="Password" name="password" required autocomplete="new-password">
                    <button type="button">
                        <i class="eye fas fa-eye"></i>
                    </button>
                    <small>Password must be 6 characters</small>
                </label>
                <label class="form-label">
                    <input type="password" id="pass" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                    <button type="button">
                        <i class="eye fas fa-eye"></i>
                    </button>
                </label>
                <div class="or-text">
                    <p>data</p>
                </div>
                <label class="form-label">
                    <input type="text" placeholder="Phone number" name="phone" required autocomplete="phone">
                    <small>Ex ● +6212345678123</small>
                </label>
                <label class="form-label">
                    <input type="text" placeholder="Address" name="address" required autocomplete="address">
                    <small>Ex ● Jl. Kalimantan II/24, Kampus Bumi Tegal Boto, Jember, Jawa Timur</small>
                </label>
                <div class="form-link">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-check" name="agreement" required autocomplete="agreement">
                        <label class="custom-control-label" for="signup-check">
                            I agree to the all
                            <a href="#">terms & consitions</a>
                            of bebostha.
                        </label>
                    </div>
                </div>
                <div class="form-btn"><input type="submit" class="btn btn-outline">sign up free</div>
            </form>
            <div class="form-bottom">
                <p>Already have an account? click on the <span>( sign in )</span>button above.</p>
            </div>
        </div>
    </div>
</section>
@endsection
