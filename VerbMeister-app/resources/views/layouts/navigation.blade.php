<nav class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900"">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img class="h-8" src="{{ asset('images/verbmeister_white.png') }}" alt="Verbmeister Logo" width="350" height="350">
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Home</a>

                <a href="{{ route('profile.edit') }}" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Profile</a>

                <a href="{{ route('quiz.show') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __("Quiz") }}
                    </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
