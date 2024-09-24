@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Hero Section with Background Video -->
    <div class="relative bg-gray-900 overflow-hidden">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/verbmeister.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark Overlay for Better Contrast -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Overlay Content -->
        <div class="relative container mx-auto px-6 py-32 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Master German Verbs with VerbMeister</h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8">An interactive platform to help you conquer German verb-preposition combinations.</p>

            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <a href="{{ route('register') }}" class="bg-verbmeister hover:bg-verbmeister-dark text-white font-bold py-3 px-6 rounded-full inline-block">
                Get Started for Free
            </a>
        </div>
    </div>
    <!-- Features Section -->
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Features</h2>
        <div class="flex flex-wrap -mx-4">
            <!-- Feature 1 -->
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-50 rounded shadow text-center">
                    <div class="mb-4">
                        <svg class="w-16 h-16 mx-auto text-verbmeister" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG content -->
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Interactive Quizzes</h3>
                    <p class="text-gray-600">Test your knowledge with engaging quizzes.</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-50 rounded shadow text-center">
                    <div class="mb-4">
                        <svg class="w-16 h-16 mx-auto text-verbmeister" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG content -->
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Progress Tracking</h3>
                    <p class="text-gray-600">Monitor your improvement over time and stay motivated.</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-50 rounded shadow text-center">
                    <div class="mb-4">
                        <svg class="w-16 h-16 mx-auto text-verbmeister" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG content -->
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Personalized Learning</h3>
                    <p class="text-gray-600">Customize your learning experience to focus on areas you want to improve.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Ready to Master German Verbs?</h2>
            <a href="{{ route('register') }}" class="bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4  hover:underline rounded">
                Sign Up Now
            </a>
        </div>
    </div>
</div>
@endsection
