@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center">
        <video autoplay muted loop class="mx-auto mb-6">
            <source src="{{ asset('videos/verbmeister.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="text-lg text-gray-700 mb-6">Start your journey to mastering German verbs today!</p>

        <a href="{{ route('register') }}" class="bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4 rounded">Get Started</a>
        <p class="mt-4 text-gray-700">Already have an account?</p>
        <a href="{{ route('login') }}" class="text-[#013019] hover:underline">Login</a>
    </div>
</div>
@endsection

