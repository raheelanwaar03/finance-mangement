@extends('auth-layout.app')

@section('title')
    Login page
@endsection

@section('card-title')
    <h1 class="text-center text-primary">Login Your Account</h1>
@endsection

@section('form-content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div class="form-group">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4 form-controlform-group">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full form-control"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-button class="ml-3 btn btn-primary">
            {{ __('Log in') }}
        </x-button>
    </div>
</form>
@endsection