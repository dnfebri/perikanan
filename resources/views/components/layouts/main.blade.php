<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css') }}">
  <script src="{{ url('js/flowbite.min.js') }}"></script>
  <script src="{{ url('fontawesome/js/all.min.js') }}"></script>
  <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
</head>
<body>
  <div class="@empty($isNav) container @endempty">
    @empty($isNav)
      <x-layouts.navbar/>
    @endempty
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    {{$slot}}
  </div>
  @stack("script")
</body>
</html>