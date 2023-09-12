@extends('layouts.app')
@section('content')


<div class="main">

    <section class="signup" id="Secsign">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form method="post" action="{{ route('auth.save') }}" id="signup-form" class="signup-form">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf

                    <h2 class="form-title">Create account</h2>
                    <div class="form-group" id="namegroup">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Enter full name"/>
                        <span class="text-danger">
                            @error('name'){{ $message }}@enderror
                        </span>
                    </div>
                    <div class="form-group" id="emailgroup">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" />
                        <span class="text-danger">
                            @error('email'){{ $message }}@enderror
                        </span>
                    </div>
                    <div class="form-group" id="passgroup">
                        <input type="password" spellcheck="false" class="form-input passbox" name="password"
                            id="password" placeholder="Password" />
                            <span class="text-danger">
                                @error('password'){{ $message }}@enderror
                            </span>
                        <!--[if !IE]><!-->
                        {{-- <i class="fa-solid fa-eye-slash pos"></i> --}}
                        <!--<![endif]-->
                    </div>
                    {{-- <div class="form-group" id="pass2group">
                        <input type="password" class="form-input" name="re_password" id="re_password"
                            placeholder="Repeat your password" onkeyup="validatePass2(); submtStatus();" />
                        <div class="error"></div>
                    </div> --}}
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>

                    </div>
                    {{-- <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" disabled />
                    </div> --}}

                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button><br>
                    <a href="{{ route('auth.login') }}">I already have an account, Sign In </a>
                </form>
                {{-- <p class="loginhere">
                    <a href="{{ route('auth.login') }}" class="loginhere-link" onclick="myFunction()">Already Have an account?</a>
                </p> --}}
            </div>
        </div>
    </section>

{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4"></div>
            <h4>Register | Custom Auth</h4><br>
            <form action="{{ route('auth.save') }}" method="post">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif

                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{old('name')  }}">
                    <span class="text-danger">
                        @error('name'){{ $message }}@enderror
                    </span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error('email'){{ $message }}@enderror
                    </span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <span class="text-danger">
                        @error('password'){{ $message }}@enderror
                    </span>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign Up</button><br>
                <a href="{{ route('auth.login') }}">I already have an account, Sign In </a>
            </form>
        </div>
    </div>
</body>

</html> --}}
