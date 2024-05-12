{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('website.layouts.app')
@section('content')
    <div class="page-content bg-light">
        <section class="px-3">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content">
                    <div class="dz-bnr-inr-entry">
                        <h1>My Account</h1>
                        <nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""> Home</a></li>
                                <li class="breadcrumb-item">My Account</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="registration-media" style="margin-top: -50px;">
                        <img src="{{ asset('assets/images/registration/pic3.png') }}" alt="/" >
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
                    <div class="login-area">
                        <h2 class="text-secondary text-center">Welcome Back</h2>
                        <p class="text-center m-b25">welcome please login to your account</p>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="m-b30">
                                <label class="label-title">Email Address</label>
                                <input type="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="m-b15">
                                <label class="label-title">Password</label>
                                <div class="secure-input ">
                                    <input type="password" name="password" class="form-control dz-password @error('password') is-invalid @enderror"
                                        placeholder="Password">
                                    <div class="show-pass">
                                        <i class="eye-open fa-regular fa-eye"></i>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row d-flex justify-content-between m-b30">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="basic_checkbox_1" name="remember">
                                        <label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if (Route::has('password.request'))
                                    <a class="text-primary" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-secondary btnhover text-uppercase me-2">Sign
                                    In</button>
                                <a href="{{ route('register') }}"
                                    class="btn btn-outline-secondary btnhover text-uppercase">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
