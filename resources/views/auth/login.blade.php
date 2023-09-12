@extends('layouts.app')
@section('content')
<body>
    <section class="signup" id="Seclogin">

        <div class="container">
            <div class="signup-content">
                <form method="post" action="{{ route('auth.check') }}" id="login-form" class="login-form">
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @csrf
                    {{-- <input name="_token" value="{{ csrf_token() }}"> --}}
                    <h2 class="form-title">Login Here</h2>

                    <div class="form-group" id="emailgroup">
                        <input type="text" class="form-input" name="email" placeholder="Enter email address" value={{ old('email') }} >
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group" id="passgroup">
                        <input type="password" spellcheck="false" class="form-input passbox1" name="password"
                            placeholder="Enter Password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        {{-- <i class="fa-solid fa-eye-slash pos1"></i>
                        <div class="error"></div> --}}
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit1" class="form-submit" value="Login" />
                    </div>
                </form>
                {{-- <p class="login here">
                   I Don't have an account<a href="{{ route('auth.register') }}" class="loginhere-link" onclick="myFunction()">signup here</a>
                </p> --}}
                <a href="{{ route('auth.register') }}">I don't have an account, Create new</a>

                {{-- <p style="text-align: center;">
                    Forget password? <a href="#" class="loginhere-link" onclick="forgetpasFunction()">click here</a>
                </p> --}}
            </div>
        </div>

    </section>
</body>
@endsection

    {{-- <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4"></div>
            <h4>Login | Custom Auth</h4><br>
            <form action="{{ route('auth.check') }}" method="post">
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>

                @endif
                @csrf
                {{-- <input name="_token" value="{{ csrf_token() }}"> --}}
                {{-- <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email address" value={{ old('email') }}>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign In</button><br>
                <a href="{{ route('auth.register') }}">I don't have an account, Create new</a>
            </form>
        </div>
    </div> --}}

