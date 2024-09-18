<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>German Verb-Preposition Quiz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div>
        <a href="{{ route('dashboard')}}">
            <img src="https://via.placeholder.com/150" alt="VerbMeister Logo">
        </a>
    </div>
    <div>
    <div>
        <a href="{{ route('dashboard') }}">Home</a>
        <a href="{{ route('profile.edit') }}">Profile</a>
    </div>

    <p>{{ $verb }}</p>

    <form method="POST" action="/check-answer">
        @csrf
        <input type="hidden" name="verb" value="{{ $verb }}">
        <input type="text" id="preposition" name="preposition">
        <button type="submit">Submit</button>
    </form>

    @if(isset($message))
        <p>{{ $message }}</p>
    @endif

    <p>Score: {{ session('score', 0) }}</p>
</body>
</html>
