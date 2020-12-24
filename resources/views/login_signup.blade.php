<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="name" content="vegana">
    <meta name="title" content="vegana - vegan food ecommerce html template">
    <meta name="keywords"
          content="vegana, vegan, food, ecommerce, store, html, template, bootstrap, vegetarian, organic, vegetables, greengrocery, fruit, healthy, shop">
    <title>Vegana - Login or Register</title>
    <link rel="icon" href="{{asset('img/logo/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/signin-up.css')}}">
</head>

<body>
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
            <form class="form">
                <label class="form-label">
                    <input type="text" placeholder="Email">
                    <small>Please follow this example - mironcoder@gmail.com</small>
                </label>
                <label class="form-label">
                    <input type="password" id="pass" placeholder="Password">
                    <button type="button"><i class="eye fas fa-eye"></i></button>
                    <small>Password must be 6 characters</small>
                </label>
                <label class="form-link">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signin-check">
                        <label class="custom-control-label" for="signin-check">Remember me</label>
                    </div>
                    <a href="#">Forgot password?</a>
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
            <ul class="form-option">
                <li><a href="#"><i class="fab fa-facebook-f"></i><span>facebook</span></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i><span>twitter</span></a></li>
                <li><a href="#"><i class="fab fa-google"></i><span>google</span></a></li>
            </ul>
            <div class="or-text">
                <p>or</p>
            </div>
            <form class="form">
                <label class="form-label">
                    <input type="text" placeholder="Phone number">
                    <small>Please follow this example - 01XXXXXXXXX</small>
                </label>
                <label class="form-label">
                    <input type="password" id="pass" placeholder="Password">
                    <button type="button">
                        <i class="eye fas fa-eye"></i>
                    </button>
                    <small>Password must be 6 characters</small>
                </label>
                <label class="form-label">
                    <input type="password" id="pass" placeholder="Repeat Password">
                    <button type="button">
                        <i class="eye fas fa-eye"></i>
                    </button>
                    <small>Password must be 6 characters</small>
                </label>
                <div class="form-link">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-check">
                        <label class="custom-control-label" for="signup-check">
                            I agree to the all
                            <a href="#">terms & consitions</a>
                            of bebostha.
                        </label>
                    </div>
                </div>
                <div class="form-btn"><button type="submit" class="btn btn-outline">sign up free</button></div>
            </form>
            <div class="form-bottom">
                <p>Already have an account? click on the <span>( sign in )</span>button above.</p>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom/main.js')}}"></script>
</body>

</html>
