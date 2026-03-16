@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">

    {{-- Guest banner --}}
    @if($isGuest)
    <div class="max-w-2xl mx-auto mb-4 bg-amber-50 border border-amber-200 text-amber-800 rounded-lg px-4 py-3 text-sm flex items-center justify-between">
        <span>📊 <strong>Practice mode</strong> — your progress resets when you close the browser.</span>
        <span class="ml-4 whitespace-nowrap">
            <a href="{{ route('register') }}" class="font-semibold underline">Sign up</a>
            or
            <a href="{{ route('login') }}" class="font-semibold underline">log in</a>
            to save progress &amp; track weak verbs.
        </span>
    </div>
    @endif

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">

        <h2 class="text-2xl font-bold mb-5 text-center" style="color:#013019;">Quiz: Choose the Correct Preposition</h2>

        {{-- Progress bar --}}
        <div style="width:100%; background-color:#e5e7eb; border-radius:9999px; height:14px; margin-bottom:1.5rem; overflow:hidden;">
            <div style="background-color:#013019; height:14px; width:{{ $progress }}%; transition: width 0.4s ease;"></div>
        </div>
        <p class="text-xs text-gray-400 text-right -mt-4 mb-5">{{ round($progress) }}% ({{ session('questions_answered', 0) }}/25)</p>

        {{-- Feedback from previous question --}}
        @if(isset($message))
        <div class="mb-6 p-4 rounded-lg border {{ $wasCorrect ? 'bg-green-50 border-green-200 text-green-800' : 'bg-red-50 border-red-200 text-red-800' }}">
            <p class="font-semibold">{!! $message !!}</p>
            @if(isset($lastVerb))
            <div class="mt-2 text-sm text-gray-600">
                <p><span class="font-medium">{{ $lastVerb }}</span> <span class="text-gray-400">({{ $lastTranslation }})</span> + <strong>{{ $correctPreposition }}</strong></p>
                <p class="italic mt-1">{{ $lastExample }}</p>
            </div>
            @endif
        </div>
        @endif

        {{-- Verb card --}}
        <div class="text-center mb-6">
            <p class="text-4xl font-bold" style="color:#013019;">{{ $verb }}</p>
            <p class="text-gray-500 mt-1">{{ $englishTranslation }}</p>
            <p class="text-gray-400 text-sm italic mt-2">{{ $exampleSentence }}</p>
        </div>

        {{-- Multiple choice form --}}
        <form method="POST" action="{{ route('quiz.check') }}">
            @csrf
            <input type="hidden" name="verb" value="{{ $verb }}">
            <input type="hidden" name="verb_id" value="{{ $verbId }}">

            <p class="text-center text-sm text-gray-500 mb-3">___ is used with <strong>{{ $verb }}</strong></p>

            <div class="grid grid-cols-2 gap-3">
                @foreach($options as $option)
                <button type="submit"
                    name="selected_preposition"
                    value="{{ $option }}"
                    class="py-3 px-4 border-2 border-gray-200 rounded-lg text-lg font-semibold text-gray-700 hover:border-[#013019] hover:bg-[#013019] hover:text-white transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-[#013019]">
                    {{ $option }}
                </button>
                @endforeach
            </div>
        </form>

        {{-- Score display --}}
        <div class="mt-6 flex justify-center gap-8 text-center">
            <div>
                <p class="text-xs text-gray-400 uppercase tracking-wide">Current Score</p>
                <p class="text-2xl font-bold" style="color:#013019;">{{ session('score', 0) }}</p>
            </div>
            <div>
                <p class="text-xs text-gray-400 uppercase tracking-wide">{{ $isGuest ? 'Session Best' : 'High Score' }}</p>
                <p class="text-2xl font-bold text-yellow-500">{{ $highScore }}</p>
            </div>
        </div>

    </div>
</div>
@endsection
