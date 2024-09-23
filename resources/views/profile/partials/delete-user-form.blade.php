<section>
    <header>
        <h3 class="text-xl font-semibold text-red-600 mb-4">
            {{ __('Delete Account') }}
        </h3>
        <p class="text-sm text-gray-600 mb-6">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="space-y-6">
        @csrf
        @method('delete')

        <!-- Password -->
        <div>
            <label for="password" class="block text-gray-700">Password</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="{{ __('Password') }}">
            @error('password')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Delete Button -->
        <div class="flex items-center gap-4">
            <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition duration-200">
                {{ __('Delete Account') }}
            </button>
        </div>
    </form>
</section>
