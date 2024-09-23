@extends('layouts.guest')

@section('content')
<div>
    <h2 class="text-center text-2xl font-bold mb-6">Register for VerbMeister</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input id="name" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @error('email')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input id="password" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input id="password_confirmation" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="password" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Register Button -->
        <div>
            <button type="submit" class="w-full bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4  hover:underline rounded">Register</button>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-4">
            <a class="text-sm text-verbmeister hover:underline" href="{{ route('login') }}">
                Already have an account? Login
            </a>
        </div>
    </form>
</div>
@endsection

