<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title> @yield('title')</title>
</head>
<body>  
      <header>
        <nav class="navigation">
              <ul>
                <a href="/">Welcome</a>
                <a href="/page2">ma page 2</a>
                <a href="/page3">ma page 3</a>
              </ul>
        </nav>
      </header>
  
    <main>
    <h1> @yield('h1')</h1>
      @yield('content')
     
    </main>
    <footer class="navigation">
      <ul>
        <a href="/">Welcome</a>
        <a href="/page2">ma page 2</a>
        <a href="/page3">ma page 3</a>
      </ul>
    </footer>
</body>
</html>