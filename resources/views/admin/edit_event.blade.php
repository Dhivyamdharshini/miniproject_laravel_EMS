<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .event-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image fills the space properly */
            border-radius: 10px; /* Optional rounded corners */
        }
    </style>
</head>
<body class="container mt-5">
    
    <h2 class="mb-4 text-center">Edit Event</h2>

    <div class="row align-items-center"> 
        <!-- Left Side: Image -->
        <div class="col-md-6">
            <img src="https://cdn.dribbble.com/userupload/20904943/file/original-9d1c7e0c11919775fd73d4ef24253398.gif" alt="Event Illustration" class="event-image">
        </div>

        <!-- Right Side: Form -->
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>{{ $errors->first() }}</strong>
                </div>
            @endif

            <form method="POST" action="{{ route('event.update', $event->id) }}" class="border p-4 rounded shadow bg-white">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="event_name" class="form-label">Event Name:</label>
                    <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}" required>
                </div>

                <div class="mb-3">
                    <label for="venue" class="form-label">Venue:</label>
                    <input type="text" class="form-control" id="venue" name="venue" value="{{ $event->venue }}" required>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Time:</label>
                    <input type="datetime-local" class="form-control" id="time" name="time" value="{{ $event->time }}" required>
                </div>

                <div class="mb-3">
                    <label for="mentor" class="form-label">Mentor:</label>
                    <input type="text" class="form-control" id="mentor" name="mentor" value="{{ $event->mentor }}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Update Event</button>
            </form>
        </div>
    </div>

</body>
</html>
