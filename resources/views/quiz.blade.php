@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Quiz Content -->
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Quiz Time: Fill in the Prepositions</h2>

        <!-- Progress Bar -->
	<div style="width: 100%; background-color: #e5e7eb; border-radius: 9999px; height: 16px; margin-bottom: 1.5rem; overflow: hidden;">
		<div style="background-color: #013019; height: 16px; width: {{ $progress }}%;"></div>
	</div>
	<!-- Debugging Progress Value -->
	<p class="text-center text-gray-500">Progress: {{ $progress }}%</p>

        <!-- Quiz Form -->
        <form method="POST" action="{{ route('quiz.check') }}">
            @csrf
            <div class="mb-4 text-center">
                <p class="text-2xl font-semibold">{{ $verb }}</p>
                <input type="hidden" name="verb" value="{{ $verb }}">
            </div>
            <div class="mb-6 flex justify-center">
                <input type="text" id="preposition" name="preposition" placeholder="Enter the preposition" required class="w-1/2 p-2 border border-gray-300 rounded">
            </div>
            <div class="flex justify-center">
            <button type="submit" class="bg-[#013019] text-white py-2 px-4 rounded hover:bg-[#014f28]-dark transition duration-200">Submit</button>
            </div>
        </form>

        @if(isset($message))
            <div class="mt-4 p-4 bg-gray-100 rounded">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mt-6 text-center">
            <p class="text-lg">Current Score: {{ session('score', 0) }}</p>
            <p class="text-lg">High Score: {{ $highScore }}</p>
        </div>
    </div>
</div>
@endsection

