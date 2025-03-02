<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin</h1>

    <a href="{{ route('event.create') }}">
        <button>Schedule an Event</button>
    </a>

    <a href="{{ route('event.list') }}">
        <button>View Events</button>
    </a>
</body>
</html>
