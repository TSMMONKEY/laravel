@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div class="col-lg-6 col-md-12 col-xs-12" style="width: 40%; margin:3rem auto">
        <div class="card">
            <div class="card-header border-bottom" style="text-align: center">
                <a class="navbar-brand" href="/">
                    <img src="images/clear-background-logo.svg" class="logo img-fluid" alt="Gondo Security" style="width: 142px">
                  </a>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="POST" action="{{ route('login') }}"">

                    @csrf

                    <!-- Email Address -->
                    <div class="form-group row mt-4">
                        <label for="email" class="col-12 col-form-label">Email</label>
                        <div class="col-12">
                            <input type="email" class="form-control col-12" id="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password Adress -->
                    <div class="form-group row mt-4">
                        <label for="exampleInputPassword2" class="col-12  col-form-label">Password</label>
                        <div class="col-12">
                            <input class="form-control" id="password" type="password" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- CheckBox -->
                    <div class="custom-control custom-checkbox m-b-20 mt-4">
                        <input type="checkbox" class="custom-control-input" id="remember_me">
                        <label class="custom-control-label" for="checkbox1">Remember me</label>
                    </div>

                    <!-- Login buttons -->
                    <div class="login-buttons mt-4">
                        <button type="submit" class="btn btn-outline-dark mr-3">Log-in</button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="btn" style="text-decoration: underline; font-weight:600">Forgot your
                                password?</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection










{{-- 
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
