@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card" style="font-family: Lexend; width:577px;">
                    {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}

                    <div class="card-body mx-auto">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-form-label"
                                    style="font-weight:600; font-size: 1rem; color:#5D5DB9">{{ __('Email Address') }}</label>

                                <div class="d-flex justify-content-center">
                                    <input id="email" type="email"
                                        style="border-width:2px; border-color:#8383BE;border-radius:15px"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>

                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="my-2"
                                        style="border-radius:25px; background-color:#8383BE; font-weight:500; font-size:1.3rem; color:white; border:0; width:487px">
                                        {{ __('Send Password Reset Link') }}
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
