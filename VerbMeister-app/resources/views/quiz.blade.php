<!DOCTYPE html>
<html>
<head>
    <title>German Verb-Preposition Quiz</title>
</head>
<div>
    <a href="{{ route('dashboard') }}">
        <img src="https://via.placeholder.com/150" alt="VerbMeister Logo">
    </a>
</div>
    <div>
        <a href="{{ route('profile.edit') }}">Profile</a>
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </div>

<body>
    <h1>German Verb-Preposition Quiz</h1>
    <form id="quiz-form">
        <p>{{ $verb->verb }}</p>
        <input type="hidden" name="verb_id" value="{{ $verb->id }}">
        <input type="text" name="preposition" required>
        <button type="submit">Submit</button>
    </form>
    <div id="result"></div>


    <script>
        document.getElementById('quiz-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch('{{ route('quiz.store') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(Object.fromEntries(formData))
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('result').innerText = data.message;
                if (data.correct_preposition) {
                    document.getElementById('result').innerText += ` The correct preposition is "${data.correct_preposition}".`;
                }
            });
        });
    </script>
</body>
</html>