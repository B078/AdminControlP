<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>

    <header class="header">
            <button id="logo">WEBWISE</button>

        <nav class="navbar" id="navbar">
            <a href="index.html">Home</a>
            <a href="portfolio.html">Products</a>
            <a href="project.html">notification</a>
        </nav>
    </header>

    <div class="sidebar" id="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <a href="#">Account</a>
                </li>
                <li>
                    <a href="#">adasd</a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>

    <script src="{{ asset('js/panel.js') }}"></script>
</body>
</html>
