<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-image {
            width: 100%;
            height: 250px; /* Adjust height as needed */
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }
    </style>
</head>
<body class="container mt-4">

    <!-- Header Image -->
    <img src="https://cdn-cjhkj.nitrocdn.com/krXSsXVqwzhduXLVuGLToUwHLNnSxUxO/assets/images/optimized/rev-847a2d1/spotme.com/wp-content/uploads/2020/07/Hero-1.jpg" 
         alt="Event Illustration" class="header-image">

    <h2 class="my-4 text-center">Event Details</h2>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Time</th>
                <th>Mentor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->event_name }}</td>
                <td>{{ $event->venue }}</td>
                <td>{{ $event->time }}</td>
                <td>{{ $event->mentor }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
