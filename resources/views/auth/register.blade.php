@extends('layouts.main')

@section('title','Register')

@section('content')
    <div class="card container" style="margin: 3rem auto; width:40%">
        <div class="card-header border-bottom">
            <h4 class="card-title" style="text-align: center">Sign-up</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}" class="forms-sample">

                @csrf

                {{-- Name --}}
                <div class="form-group mt-4">
                    <label for="name">Username</label>
                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                        class="form-control" id="exampleInputUsername1" placeholder="Username">
                </div>

                {{-- Email --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" :value="old('email')" required autocomplete="username"
                        class="form-control" id="email" placeholder="Email">
                </div>

                {{-- Password --}}
                <div class="form-group mt-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" required autocomplete="new-password" class="form-control"
                        id="password">
                </div>

                {{-- Password Confirm --}}
                <div class="form-group mt-4 mb-4">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required autocomplete="new-password"
                        class="form-control" id="password_confirmation">
                </div>

                <button class="btn btn-outline-primary ml-4">
                    {{ __('Register') }}
                </button>
                <a href="{{ route('login') }}" class="btn btn-light">Already registered?</a>

                {{-- <div class="flex items-center justify-end mt-4">
          <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
              {{ __('Already registered?') }}
          </a>

          <x-primary-button class="ml-4">
              {{ __('Register') }}
          </x-primary-button>
      </div> --}}
            </form>
        </div>
    </div>
@endsection










{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
