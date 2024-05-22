<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="form-container">
        <form action="/login" method="POST">
            @csrf
            <h2>Login</h2>
            <label for="loginname">name:</label>
            <input type="text" id="loginname" name="loginname">
            @error('loginname')
                <div class="danger-alert">
                    {{ $message }}
                </div>
            @enderror
            <label for="loginpassword">Password:</label>
            <input type="password" id="loginpassword" name="loginpassword">
            @error('loginpassword')
                <div class="danger-alert">
                    {{ $message }}
                </div>
            @enderror
            <button>Login</button>
            <a href="{{ route('register') }}">register</a>
        </form>
    </div>
</body>
</html>