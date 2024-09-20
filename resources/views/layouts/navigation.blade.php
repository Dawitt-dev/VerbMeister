<nav class="bg-white shadow">
    <div class="container mx-auto px-4">
        <div class="flex justify-between">
            <div>
                <a href="{{ route('dashboard') }}" class="flex items-center py-4">
                    <img src="{{ asset('images/verbmeister_white.png') }}" alt="VerbMeister Logo" class="h-8">
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-gray-800">Profile</a>
                <a href="{{ route('quiz.show') }}" class="text-gray-600 hover:text-gray-800">Quiz</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-gray-800">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>

