@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">

    {{-- Welcome card --}}
    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <h3 class="text-2xl font-bold mb-4" style="color:#013019;">Welcome, <strong>{{ Auth::user()->name }}</strong>!</h3>
        <div class="flex gap-8">
            <div>
                <p class="text-xs text-gray-400 uppercase tracking-wide">High Score</p>
                <p class="text-3xl font-bold text-yellow-500">{{ Auth::user()->high_score }}</p>
            </div>
            <div>
                <p class="text-xs text-gray-400 uppercase tracking-wide">Verbs Practiced</p>
                <p class="text-3xl font-bold" style="color:#013019;">{{ Auth::user()->verbStats()->count() }}</p>
            </div>
        </div>
        <div class="mt-4 text-sm text-gray-500">
            <p>Email: {{ Auth::user()->email }}</p>
            <p>Member since: {{ Auth::user()->created_at->format('F j, Y') }}</p>
        </div>
        <div class="mt-4">
            <a href="{{ route('quiz.show') }}" class="inline-block bg-[#013019] text-white px-5 py-2 rounded hover:bg-green-900 transition">Start Quiz</a>
        </div>
    </div>

    {{-- Weak verbs --}}
    @php
        $weakVerbs = Auth::user()->verbStats()
            ->with('germanVerb')
            ->where('incorrect_count', '>', 0)
            ->orderByRaw('incorrect_count / (correct_count + incorrect_count + 1) DESC')
            ->limit(8)
            ->get();
    @endphp

    @if($weakVerbs->count() > 0)
    <div class="bg-white shadow rounded-lg p-6">
        <h4 class="text-lg font-bold mb-4" style="color:#013019;">Your Weak Verbs</h4>
        <p class="text-sm text-gray-500 mb-4">These verbs appear more often in your quiz based on your incorrect answers.</p>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-gray-400 border-b">
                        <th class="pb-2">Verb</th>
                        <th class="pb-2">Translation</th>
                        <th class="pb-2">Preposition</th>
                        <th class="pb-2 text-center">Correct</th>
                        <th class="pb-2 text-center">Incorrect</th>
                        <th class="pb-2 text-center">Accuracy</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($weakVerbs as $stat)
                    @php
                        $total = $stat->correct_count + $stat->incorrect_count;
                        $accuracy = $total > 0 ? round(($stat->correct_count / $total) * 100) : 0;
                    @endphp
                    <tr class="border-b last:border-0">
                        <td class="py-2 font-semibold">{{ $stat->germanVerb->verb }}</td>
                        <td class="py-2 text-gray-500">{{ $stat->germanVerb->english_translation }}</td>
                        <td class="py-2"><span class="bg-gray-100 px-2 py-0.5 rounded font-mono text-xs">{{ $stat->germanVerb->preposition }}</span></td>
                        <td class="py-2 text-center text-green-600 font-medium">{{ $stat->correct_count }}</td>
                        <td class="py-2 text-center text-red-500 font-medium">{{ $stat->incorrect_count }}</td>
                        <td class="py-2 text-center">
                            <span class="font-semibold {{ $accuracy >= 70 ? 'text-green-600' : ($accuracy >= 40 ? 'text-yellow-500' : 'text-red-500') }}">
                                {{ $accuracy }}%
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
    <div class="bg-white shadow rounded-lg p-6 text-center text-gray-400">
        <p>No quiz data yet. <a href="{{ route('quiz.show') }}" class="underline" style="color:#013019;">Take your first quiz</a> to see your weak verbs here.</p>
    </div>
    @endif

</div>
@endsection
