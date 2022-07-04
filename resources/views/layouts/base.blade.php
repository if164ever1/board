<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') ::</title>
    <a href=""></a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('index') }}" class="navber-brand mr-auto">Main Page</a>
            <a href="{{ route("register") }}" class="nav-item nav0link">Registration</a>
            <a href="{{ route("login") }}" class="nav-item nav-link">Login</a>
            <a href="{{ route("home") }}" class="nav-item nav-link">My advertisement</a>

            <form action="{{ route("logout") }}" method="POST" class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Logout">
            </form>
        </nav>
        <h1 class="my-3 text-center">Advertisement</h1>
        @yield('main')
    </div>
</body>
</html>
