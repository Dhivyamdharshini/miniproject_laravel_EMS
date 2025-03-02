<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
  
</head>
<body>

    <header>
        <h1>Event Management System</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('events.view') }}">Events</a>
            <a href="{{ route('admin.login') }}">Admin Login</a>
            <a href="{{ route('student.register') }}">Student Login</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
