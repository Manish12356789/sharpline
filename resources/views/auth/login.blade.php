@extends('layouts.user')

@section('content')
<div class="page-content login p-t50">
    <div class="login-form">
        <div class="tab-content nav">
            <div id="login" class="tab-pane active text-center">
                <form class="p-a30 form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h3 class="form-title m-t0">Sign In</h3>
                    <div class="separator-outer m-b5">
                        <div class="separator bg-primary style-liner"></div>
                    </div>
                    <p>Enter your e-mail address and your password. </p>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Id" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Type Password" required autocomplete="current-password"/>
                    </div>
                    <div class="form-group text-left">
                        <button class="site-button m-r5 dz-xs-flex">login</button>
                        <div class="m-t20">
                            <label class="m-b0">
                                <input id="check1" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label for="check1">Remember me</label>
                            </label>
                            @if (Route::has('password.request'))
                                    <a class="m-l10" data-toggle="tab" href="#forgot-password" ><i class="fa fa-unlock-alt"></i> 
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </div>
                </form>
                <div class="bg-primary p-a15 bottom">
                    <a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a>
                </div>
            </div>
            <div id="forgot-password" class="tab-pane fade">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="p-a30 form text-center" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <h3 class="form-title m-t0">Forget Password ?</h3>
                    <div class="separator-outer m-b5">
                        <div class="separator bg-primary style-liner"></div>
                    </div>
                    <p>Enter your e-mail address below to reset your password. </p>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Id" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                        <button class="site-button pull-right">Submit</button>
                    </div>
                </form>
            </div>
            <div id="developement-1" class="tab-pane fade">
                <form class="p-a30 form text-center text-center" action="{{ route('register') }}" method="POST">
                    @csrf
                    <h3 class="form-title m-t0">Sign Up</h3>
                    <div class="separator-outer m-b5">
                        <div class="separator bg-primary style-liner"></div>
                    </div>
                    <p>Enter your personal details below: </p>
                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">


                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-Type Password" required autocomplete="new-password">
                    </div>
                    <div class="m-b30">
                        <input id="check2" type="checkbox"/>
                        <label for="check2">I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy</a> </label>
                    </div>
                    <div class="form-group text-left ">
                        <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                        <button class="site-button pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
