<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title> @yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            
                <a class="navbar-brand" href="/">Welcome</a>
                <a class="navbar-brand" href="/page2">ma page 2</a>
                <a class="navbar-brand" href="/page3">ma page 3</a>
                <a class="navbar-brand" href="/library">my library</a>
                <a class="navbar-brand" href="/create">Ajouter un livre</a>
            
        </nav>
    </header>

    <main>
        <img class='monimage'  src="/img/livre.png" alt="image">
        <h1> @yield('h1')</h1>
        @yield('content')

    </main>

    <!-- JavaScript Bundle with Popper -->
    <script>
    src = "/js/bootstrap.min.js"
    </script>
</body>

</html>