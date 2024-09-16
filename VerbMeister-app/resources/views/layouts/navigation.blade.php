<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img class="block h-8 w-auto" src="https://via.placeholder.com/150" alt="VerbMeister Logo">
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Dashboard</a>
                <a href="{{ route('profile.edit') }}" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
