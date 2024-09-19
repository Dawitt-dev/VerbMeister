<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Verbmeister</title>
</head>
<!-- Logo Video -->
<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
            <video autoplay muted loop width="300">
                <source src="{{ asset('videos/verbmeister.mp4') }}" type="video/mp4">
                <!-- Fallback content for unsupported browsers -->
                Your browser does not support the video tag.
            </video>
        </div>
<body>
    <h1>Welcome to Verbmeister!</h1>
    <p>Start your journey to mastering German verbs today!</p>
    <a href="{{ route('register') }}">Get Started</a>
    <p>Already have an account?</p>
    <a href="{{ route('login') }}">Login</a>
</body>
</body>
</html>
