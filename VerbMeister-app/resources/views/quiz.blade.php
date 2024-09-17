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
    <a href="{{ route('dashboard') }}">Home</a>
    <a href="{{ route('profile.edit') }}">Profile</a>
</div>

<body>
    <h1>German Verb-Preposition Quiz</h1>
    <form id="quiz-form">
        <p>{{ $verb->verb }}</p>
        <input type="hidden" name="verb_id" value="{{ $verb->id }}">
        <input type="text" name="preposition" required>
        <div style="margin-top: 10px;">
            <button type="submit">Submit</button>
            <button type="button" id="next-button">Next</button>
        </div>
    </form>
    <div id="result"></div>

    <script>
        // Submit form handler
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

        // "Next" button handler
        document.getElementById('next-button').addEventListener('click', function() {
            // Clear the input field and result area
            document.querySelector('input[name="preposition"]').value = '';
            document.getElementById('result').innerText = '';

            // Simulate fetching the next verb (you may replace this with an actual server call)
            fetch('{{ route('quiz.next') }}', {
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Update the verb text for the next question
                document.querySelector('p').innerText = data.verb;
                document.querySelector('input[name="verb_id"]').value = data.verb_id;
            });
        });
    </script>
</body>
</html>
