<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header class="header-nav">
        <h1 class="title">Bithouse Mengajar</h1>
        <div class="container-list">
            <ul>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/blog/blog">Blog</a></li>
                <li><a href="/post/createpost">Create post</a></li>
                <li><a href="/bayu">Bayu</a></li>
                <li><a href="/">Home</a></li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer>Bayu 2023</footer>
</body>

</html>
