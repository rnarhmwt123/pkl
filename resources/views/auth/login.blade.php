@extends('layouts.app')

@section('content')
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('colorlib/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('colorlib/css/style.css')}}">
</head>
<body>

<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('colorlib/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="{{ route('login') }}" method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Name"/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password"/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>     
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{asset('colorlib/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('colorlib/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
