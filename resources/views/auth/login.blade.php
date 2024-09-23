@extends('layouts.guest')

@section('content')
<div>
    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <h2 class="text-center text-2xl font-bold mb-6">Login to VerbMeister</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input id="password" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me --
        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300 text-verbmeister focus:ring-verbmeister">
                <span class="ml-2 text-gray-700">Remember me</span>
            </label>
        </div>-->

        <!-- Login Button -->
        <div>
            <button type="submit"  class="w-full bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4  hover:underline rounded">Log in</button>
        </div>

        <!-- Forgot Password and Register Links 
        <div class="flex justify-between items-center mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-verbmeister hover:underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a> -->
            @endif

            <a class="text-sm text-verbmeister hover:underline" href="{{ route('register') }}">
                Don't have an account? Register
            </a>
        </div>
    </form>
</div>
@endsection

