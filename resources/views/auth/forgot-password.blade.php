@extends('layouts.guest')

@section('content')
<div>
    <h2 class="text-center text-2xl font-bold mb-6">Reset Your Password</h2>

    <div class="mb-4 text-sm text-gray-700">
        Forgot your password? No problem. Just let us know your email address, and we will email you a password reset link that will allow you to choose a new one.
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Send Reset Link Button -->
        <div>
            <button type="submit" class="w-full bg-verbmeister text-white py-2 px-4 rounded hover:bg-verbmeister-dark transition duration-200">
                Email Password Reset Link
            </button>
        </div>

        <!-- Back to Login Link -->
        <div class="text-center mt-4">
            <a class="text-sm text-verbmeister hover:underline" href="{{ route('login') }}">
                Back to Login
            </a>
        </div>
    </form>
</div>
@endsection

