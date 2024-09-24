@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center">
        <!-- Video Section -->
        <video autoplay muted loop playsinline class="mx-auto mb-6 w-full max-w-md">
            <source src="{{ asset('videos/verbmeister.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <!-- About Us Introduction -->
        <h1 class="text-4xl font-bold text-gray-800 mb-6">About VerbMeister</h1>
        <p class="text-lg text-gray-700 mb-6">
            VerbMeister is an interactive platform designed to help learners master German verb-preposition combinations. 
            Whether you're a beginner or advanced, our engaging quizzes and personalized learning paths help you stay motivated 
            and make progress efficiently.
	</p>

        <!-- Mission Statement -->
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Mission</h2>
        <p class="text-lg text-gray-600 mb-6">
            At VerbMeister, our mission is to make learning German more accessible by providing a comprehensive, engaging platform that encourages consistent practice and real progress.
        </p>

        <!-- Key Features Section -->
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Key Features</h2>
        <ul class="list-disc text-left inline-block text-lg text-gray-700 mb-8">
            <li class="mb-2">Interactive quizzes that adapt to your learning level</li>
            <li class="mb-2">Progress tracking to monitor your improvement</li>
            <li class="mb-2">Custom learning paths tailored to your specific needs</li>
            <li class="mb-2">Friendly interface that makes learning fun and engaging</li>
        </ul>

        <!-- Call to Action -->
        <div class="mt-6">
            <a href="{{ route('register') }}" class="bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4 hover:underline rounded">Join Us Now</a>
            <p class="mt-4 text-gray-700">Already have an account?</p>
            <a href="{{ route('login') }}" class="text-[#013019] hover:underline">Login</a>
        </div>
    </div>
</div>
@endsection
