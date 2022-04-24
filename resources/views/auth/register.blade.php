@extends('auth-layout.app')

@section('title')
    Register page
@endsection

        <!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

@section('card-title')
    <h1 class="text-center text-primary">Register Your Account</h1>
@endsection


@section('form-content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="form-group">
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="block mt-1 form-control w-full" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4 form-group"> 
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
    </div>

    <!-- Password -->
    <div class="mt-4 form-group">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full form-control"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4 form-group">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                        type="password"
                        name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-button class="ml-4 btn btn-primary">
            {{ __('Register') }}
        </x-button>
    </div>
</form>
@endsection