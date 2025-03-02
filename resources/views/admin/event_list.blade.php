<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-image {
            width: 100%;
            height: 250px; /* Adjust height as needed */
            object-fit: cover;
            display: block;
            border-radius: 10px;
        }
    </style>
</head>
<body class="container mt-4">

    <!-- Header Image -->
    <div class="text-center">
    <img src="https://cdni.iconscout.com/illustration/premium/thumb/event-management-illustration-download-in-svg-png-gif-file-formats--service-entertainment-catering-organize-celebrity-ceremony-pack-people-illustrations-4620527.png" 
     alt="Event Header" class="header-image">


    <h2 class="text-center mt-3">All Events</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Venue</th>
                <th>Time</th>
                <th>Mentor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->event_name }}</td>
                <td>{{ $event->venue }}</td>
                <td>{{ $event->time }}</td>
                <td>{{ $event->mentor }}</td>
                <td>
                    <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="{{ route('event.delete', $event->id) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this event?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('event.create') }}" class="btn btn-primary">Add New Event</a>
    <a href="{{ route('admin.login') }}" class="btn btn-secondary">LOGOUT</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
