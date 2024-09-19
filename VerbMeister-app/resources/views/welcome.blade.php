<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="text-center">
        <video autoplay muted loop width="300" class="mx-auto mb-6">
            <source src="{{ asset('videos/verbmeister.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">Welcome to Verbmeister!</h1>
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-6">Start your journey to mastering German verbs today!</p>
        
        <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get Started</a>
        <p class="mt-4 text-gray-700 dark:text-gray-300">Already have an account?</p>
        <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
    </div>
</div>
