<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
</head>
<body>
    <h2>Registered Students</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Register Number</th>
            <th>Class</th>
            <th>Event Selected</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->register_number }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->event_selected }}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ route('home') }}"><button>Back to Home</button></a>
</body>
</html>
