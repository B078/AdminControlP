<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="form-container">
        <form action="/register" method="POST">
            @csrf
            <h2>Register</h2>
            <label for="name">name:</label>
            <input type="text" id="name" name="name">
            @error('name')
                <div class="danger-alert">
                    {{ $message }}
                </div>
            @enderror
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            @error('email')
                <div class="danger-alert">
                    {{ $message }}
                </div>
            @enderror
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password')
                <div class="danger-alert">
                    {{ $message }}
                </div>
            @enderror
            <button>Register</button>
            <a href="{{ route('login') }}">Login</a>
        </form>
    </div>
</body>
</html>