<form method="post" action="{{ route('profile.destroy') }}">
    @csrf
    @method('delete')

    <h2>{{ __('Delete Account') }}</h2>

    <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

    <div>
        <button type="submit">{{ __('Delete Account') }}</button>
        <label for="password">{{ __('Password') }}</label>
        <input id="password" name="password" type="password" placeholder="{{ __('Password') }}">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>
</form>
