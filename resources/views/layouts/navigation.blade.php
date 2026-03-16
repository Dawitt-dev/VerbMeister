<nav class="bg-white shadow">
    <div class="container mx-auto px-4">
        <div class="flex justify-between">
            <div>
                <a href="{{ route('dashboard') }}" class="flex items-center py-4">
                    <img src="{{ asset('images/verbmeister.png') }}" alt="VerbMeister Logo" class="h-8">
                </a>
            </div>
            <div class="flex items-center space-x-4">
		@auth
                    <!-- Authenticated User Links -->
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                    <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-gray-800">Profile</a>
                    <a href="{{ route('quiz.show') }}" class="text-gray-600 hover:text-gray-800">Quiz</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-800">Logout</button>
                    </form>
	        @else
                    <!-- Guest Links -->
                    <a href="{{ route('quiz.show') }}" class="text-gray-600 hover:text-gray-800">Quiz</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About</a>
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800">Login</a>
                    <a href="{{ route('register') }}" class="bg-[#013019] text-white px-3 py-1.5 rounded hover:bg-green-900 text-sm">Sign Up</a>
        @endauth
            </div>
        </div>
    </div>
</nav>

