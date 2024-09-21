@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow rounded p-6">
        <h3 class="text-2xl font-bold mb-4">Welcome  <strong>{{ Auth::user()->name }}</strong>!</h3>
	<p class="mb-2">Your highest Score is <strong>{{ Auth::user()->high_score }}</strong></p>
        <p class="mb-2">Email: <strong>{{ Auth::user()->email }}</strong></p>
        <p class="mb-2">Account Created: <strong>{{ Auth::user()->created_at }}</strong></p>
    </div>
</div>
@endsection

