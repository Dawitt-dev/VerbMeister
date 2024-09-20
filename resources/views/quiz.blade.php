@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Quiz Content -->
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Quiz Time: Fill in the Prepositions</h2>

        <!-- Progress Bar -->
        <div class="w-full bg-gray-200 rounded-full h-4 mb-6">
            <div class="bg-[#013019] h-4 rounded-full" style="width: {{ $progress }}%;"></div>
        </div>

        <!-- Quiz Form -->
        <form method="POST" action="{{ route('quiz.check') }}">
            @csrf
            <div class="mb-4">
                <p class="text-xl font-semibold">{{ $verb }}</p>
                <input type="hidden" name="verb" value="{{ $verb }}">
            </div>
            <div class="mb-6">
                <input type="text" id="preposition" name="preposition" placeholder="Enter the preposition" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="w-full bg-[#013019] text-white py-2 rounded hover:bg-[#014f28] transition duration-200">Submit Answer</button>
        </form>

        @if(isset($message))
            <div class="mt-4 p-4 bg-gray-100 rounded">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mt-6 text-center">
            <p class="text-lg">Current Score: {{ session('score', 0) }}</p>
            <p class="text-lg">High Score: {{ session('high_score', 0) }}</p>
        </div>
    </div>
</div>
@endsection

