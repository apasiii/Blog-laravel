<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
  @vite('resources/css/app.css')
  <title> Page {{ $title }} </title>
</head>

<body>
  @include('partials.navbar')






  @yield('content')
  {{-- @yield('content-about')
  @yield('content-blog') --}}






  <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>