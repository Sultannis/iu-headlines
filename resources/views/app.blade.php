<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=s, initial-scale=1.0">
  <title>@yield('title')</title>
</head>
<body>
  @include('nav')

  @yield('content')
</body>
</html>