@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center my-2">
                <h1 class=" d-flex justify-content-center align-items-center" style="font-weight:800">Hi There! Welcome to <img style="width:25%;margin-left:10px" src="{{asset('image/studnest_logo_with_text.png')}}"></h1>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="card" style="font-family: Lexend; width:577px;">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs d-flex justify-content-between">
                            @guest
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                            @endguest
                        </ul>
                        </div>
                        <div class="card-body mx-auto">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">

                                    <label for="username" class="col-form-label"
                                        style="font-weight:600; font-size: 1rem; color:#5D5DB9">{{ __('Name') }}</label>

                                    <div class="d-flex justify-content-center">
                                        <input id="username" type="text" style="border-width:2px; border-color:#8383BE;border-radius:15px"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" required autocomplete="username" autofocus>

                                        {{-- @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-form-label"
                                        style="font-weight:600; font-size: 1rem; color:#5D5DB9">{{ __('Email Address') }}</label>

                                    <div class="d-flex justify-content-center">
                                        <input id="email" type="email" style="border-width:2px; border-color:#8383BE;border-radius:15px"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                    {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}
                                </div>

                                <div class="row mb-3">
                                    <label for="number" class="col-form-label"
                                        style="font-weight:600; font-size: 1rem; color:#5D5DB9">Number</label>

                                    <div class="d-flex justify-content-center">
                                        <input id="number" type="text" style="border-width:2px; border-color:#8383BE;border-radius:15px"
                                            class="form-control @error('number') is-invalid @enderror" name="number"
                                            value="{{ old('number') }}" required autocomplete="number" autofocus>

                                        {{-- @error('number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-form-label"
                                        style="font-weight:600; font-size: 1rem; color:#5D5DB9">{{ __('Password') }}</label>

                                    <div class="d-flex justify-content-center">
                                        <input id="password" type="password" style="border-width:2px; border-color:#8383BE;border-radius:15px"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">


                                    </div>
                                    {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-form-label"
                                        style="font-weight:600; font-size: 1rem; color:#5D5DB9">{{ __('Confirm Password') }}</label>

                                    <div class="d-flex justify-content-center">
                                        <input id="password-confirm" type="password" class="form-control" style="border-width:2px; border-color:#8383BE;border-radius:15px"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="my-2"
                                            style="border-radius:25px; background-color:#8383BE; font-weight:800; font-size:2rem; color:white; border:0; width:487px">
                                            {{ __('Sign Up') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
