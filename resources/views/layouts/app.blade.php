<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Boolean Blog @yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
  <nav>
    <div class="links">
      <a href="{{route('home')}}">Home</a>
      <a href="{{route('about')}}">About</a>
      <a href="{{route('blog')}}">Blog</a> 
    </div>
  </nav>
  <!-- main -->
  <main>
    @yield('content')
  </main>
</body>
</html>