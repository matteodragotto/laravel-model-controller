<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @vite(['resources/sass/app.scss', "resources/js/app.js"])

  <title>@yield("title")</title>
</head>

<body>
  @include("partials.header")

  @yield("main")

</body>

</html>