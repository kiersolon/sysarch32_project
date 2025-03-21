<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Our Laravel App</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        .btn-primary {
            background-color: #ff6b6b;
            border: none;
        }
        .btn-primary:hover {
            background-color: #ff4757;
        }
        .container {
            margin-top: 15%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-3 fw-bold">Welcome to Our Platform</h1>
        <p class="lead">By: JOHN KIER SOLON</p>
        <a href="{{ route('items.index') }}" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>
</body>
</html>
