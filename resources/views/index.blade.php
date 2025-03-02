<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <header class="bg-primary text-white text-center py-4">
        <h1>Welcome to the Event Management System</h1>
    </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Admin Login Panel -->
            <div class="col-md-4">
                <div class="border rounded shadow-sm p-3 bg-white text-center">
                    <div class="border-bottom pb-2">
                        <img src="https://i.pinimg.com/originals/49/83/12/49831205223c345b10d0b18ae57b11b8.gif" class="img-fluid rounded" alt="Admin Panel">
                    </div>
                    <h5 class="mt-3">Admin Panel</h5>
                    <p>Login as an admin to manage events.</p>
                    <a href="{{ route('admin.login') }}" class="btn btn-primary">Admin Login</a>
                </div>
            </div>

            <!-- Student Registration Panel -->
            <div class="col-md-4">
                <div class="border rounded shadow-sm p-3 bg-white text-center">
                    <div class="border-bottom pb-2">
                        <img src="https://cdn.dribbble.com/userupload/22803462/file/original-c8e0d2ce8435353e386bf621e0e9c410.gif" class="img-fluid rounded" alt="Student Registration">
                    </div>
                    <h5 class="mt-3">Student Registration</h5>
                    <p>Register as a student for an event.</p>
                    <a href="{{ route('student.register') }}" class="btn btn-success">Student Register</a>
                </div>
            </div>

            <!-- Event Details Panel -->
            <div class="col-md-4">
                <div class="border rounded shadow-sm p-3 bg-white text-center">
                    <div class="border-bottom pb-2">
                        <img src="https://cdn.dribbble.com/userupload/23266251/file/original-7a51267c622e19f0e3ef317953790d18.gif" class="img-fluid rounded" alt="Event Details">
                    </div>
                    <h5 class="mt-3">Event Details</h5>
                    <p>View the scheduled events.</p>
                    <a href="{{ route('events.view') }}" class="btn btn-info">View Event Details</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-5 mt-4 bg-dark text-white ">&copy; 2025 Event Management System. All Rights Reserved.</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!--https://liteb.smeclabs.com/assets/frontend/default-new/image/login-security.gif-->