<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        window.onload = function() {
            @if(session('success'))
                alert("Thank you for registering! You will be redirected to the home page.");
                setTimeout(function() {
                    window.location.href = "{{ route('home') }}"; // Redirect after 3 seconds
                }, 3000);
            @endif
        };
    </script>
</head>
<body class="container mt-5">

    <h2 class="mb-4">Student Registration</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card p-4 shadow-lg">
        <form method="POST" action="{{ route('student.register.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="register_number" class="form-label">Register Number:</label>
                <input type="text" id="register_number" name="register_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <input type="text" id="class" name="class" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="event_id" class="form-label">Select Event:</label>
                <select id="event_id" name="event_id" class="form-select" required>
                    <option value="">-- Select an Event --</option>
                    @foreach($events as $event)
                        <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
    </div>

    <br>
    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
