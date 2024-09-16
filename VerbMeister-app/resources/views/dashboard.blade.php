<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ __("Welcome to VerbMeister!") }}</h3>
                    <p>{{ __("You're logged in as:") }} {{ Auth::user()->name }}</p>
                    <p>{{ __("Email:") }} {{ Auth::user()->email }}</p>
                    <p>{{ __("Account Created:") }} {{ Auth::user()->created_at }}</p>  
                    <p>{{ __("Last Login:") }} {{ Auth::user()->last_login }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
