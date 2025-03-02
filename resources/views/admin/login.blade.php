<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            height: 100%;
        }
        .image-panel {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .image-panel img {
            max-height: 80%; /* Ensures the image scales well */
            width: auto;
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Image Panel (Left Side) -->
            <div class="col-md-4">
                <div class="card image-panel p-4">
                    <img src="https://www.codewithddsingh.com/assets/frontend/default-new/image/login-security.gif" class="img-fluid" alt="Admin Image">
                </div>
            </div>

            <!-- Login Form Panel (Right Side) -->
            <div class="col-md-4">
                <div class="card shadow p-4 login-container">
                    <h2 class="text-center">Admin Login</h2>

                    <!-- Show error message if login fails -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first() }}</strong>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>

                        <!-- Back to Home Button -->
                        <a href="{{ route('home') }}" class="btn btn-secondary w-100 mt-2">Back to Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
