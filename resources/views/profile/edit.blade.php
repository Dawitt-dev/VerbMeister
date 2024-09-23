@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Profile</h2>

        <div class="space-y-6">
            <div class="p-6 bg-gray-50 rounded">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-6 bg-gray-50 rounded">
                @include('profile.partials.update-password-form')
            </div>

            <div class="p-6 bg-gray-50 rounded">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
