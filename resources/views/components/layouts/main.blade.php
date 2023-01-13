<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'node_modules/flowbite/dist/flowbite.min.js'])
  @vite(['resources/fontawesome/css/all.min.css', 'resources/fontawesome/js/all.min.js'])
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
  <div class="container">
    <x-layouts.navbar/>
    {{-- <x-layouts.navbardebug/> --}}
    {{-- @include("components.layouts.navbar") --}}
    {{$slot}}
  </div>
  @stack("script")
</body>
</html>