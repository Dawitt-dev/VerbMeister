<section>
    <header>
        <h3 class="text-xl font-semibold text-gray-800 mb-4">
            {{ __('Update Password') }}
        </h3>
        <p class="text-sm text-gray-600 mb-6">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div>
            <label for="current_password" class="block text-gray-700">Current Password</label>
            <input id="current_password" name="current_password" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded" autocomplete="current-password">
            @error('current_password')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- New Password -->
        <div>
            <label for="password" class="block text-gray-700">New Password</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded" autocomplete="new-password">
            @error('password')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded" autocomplete="new-password">
            @error('password_confirmation')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Save Button -->
        <div class="flex items-center gap-4">
            <button type="submit"  class="bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4  hover:underline rounded">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-sm text-green-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

