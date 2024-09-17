<!DOCTYPE html>
<html>
<head>
    <title>German Verb-Preposition Quiz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->
    <style>
        #next-button {
            display: none; /* Hide the Next button initially */
        }
    </style>
</head>

<body>
    <div>
        <a href="{{ route('dashboard') }}">
            <img src="https://via.placeholder.com/150" alt="VerbMeister Logo">
        </a>
    </div>
    <div>
        <a href="{{ route('dashboard') }}">Home</a>
        <a href="{{ route('profile.edit') }}">Profile</a>
    </div>

    <h1>German Verb-Preposition Quiz</h1>
    
    <!-- Quiz Form -->
    <form id="quiz-form">
        <p id="verb-text">{{ $verb->verb }}</p> <!-- Display verb -->
        <input type="hidden" name="verb_id" id="verb_id" value="{{ $verb->id }}"> <!-- Hidden verb_id -->
        <input type="text" name="preposition" id="preposition" required placeholder="Enter preposition"> <!-- Preposition input -->
        <div style="margin-top: 10px;">
            <button type="submit">Submit</button>
            <button type="button" id="next-button">Next</button>
        </div>
    </form>

    <!-- Result & Score -->
    <div id="result"></div>
    <div id="score">Score: 0</div> <!-- Score display -->

    <script>
    let score = 0; // Initialize score

    // Fetch CSRF token from the meta tag
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Submit form handler
    document.getElementById('quiz-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Prepare form data
        const formData = {
            verb_id: document.getElementById('verb_id').value,
            preposition: document.getElementById('preposition').value
        };

        // Send the answer to the backend for validation
        fetch('{{ route('quiz.store') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            // If the answer is correct
            if (data.correct) {
                score++;
                document.getElementById('result').innerText = `Correct! The preposition is "${data.correct_preposition}".`;
                document.getElementById('score').innerText = `Score: ${score}`;

                // Show the "Next" button to move to the next question
                document.getElementById('next-button').style.display = 'inline-block';
            } else {
                // If the answer is wrong, show the correct preposition
                document.getElementById('result').innerText = `Wrong! The correct preposition is "${data.correct_preposition}". Try again.`;
                document.getElementById('preposition').value = '';
            }
            
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('result').innerText = 'An error occurred. Please try again.';
        });
    });

    // "Next" button handler
    document.getElementById('next-button').addEventListener('click', function() {
        loadNextQuestion();
    });

    // Function to load the next question
    function loadNextQuestion() {
        fetch('{{ route('quiz.next') }}', {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(response => response.json())
        .then(data => {
            // Clear the input and result area for the next question
            document.getElementById('preposition').value = '';
            document.getElementById('result').innerText = '';

            // Update the verb and hidden verb ID
            document.getElementById('verb-text').innerText = data.verb;
            document.getElementById('verb_id').value = data.verb_id;

            // Hide the "Next" button
            document.getElementById('next-button').style.display = 'none';
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('result').innerText = 'An error occurred while fetching the next question.';
        });
    }
</script>
</body>
</html>
