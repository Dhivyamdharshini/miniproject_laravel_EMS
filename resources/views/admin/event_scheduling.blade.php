<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Scheduling</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image fills the container */
            border-radius: 10px; /* Optional: rounded corners */
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Event Scheduling Form -->
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center text-primary">Schedule an Event</h2>
                    <form method="POST" action="{{ route('event.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="event_name" class="form-label">Event Name:</label>
                            <input type="text" id="event_name" name="event_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="venue" class="form-label">Venue:</label>
                            <input type="text" id="venue" name="venue" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Time:</label>
                            <input type="datetime-local" id="time" name="time" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="mentor" class="form-label">Mentor:</label>
                            <input type="text" id="mentor" name="mentor" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Schedule Event</button>
                    </form>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-md-6">
                <div class="image-container">
                    <img src="https://media.licdn.com/dms/image/v2/C4D12AQH3moW8i3ewrw/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1628589993746?e=2147483647&v=beta&t=2YRgQC3LhPMjKfbEkR4DnmOmvb6h6atmVxpvzzzIe_g" alt="Event Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
