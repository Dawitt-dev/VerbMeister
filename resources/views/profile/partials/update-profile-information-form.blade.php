<section>
    <header>
        <h3 class="text-xl font-semibold text-gray-800 mb-4">
            {{ __('Profile Information') }}
        </h3>
        <p class="text-sm text-gray-600 mb-6">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <label for="name" class="block text-gray-700">Name</label>
            <input id="name" name="name" type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" name="email" type="email" class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-sm text-gray-600">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline text-verbmeister hover:text-verbmeister-dark">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Save Button -->
        <div class="flex items-center gap-4">
            <button type="submit"  class="bg-[#013019] hover:bg-[#014f28] text-white font-bold py-2 px-4  hover:underline rounded">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-green-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
