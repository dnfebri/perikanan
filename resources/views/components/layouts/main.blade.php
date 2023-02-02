<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('/css/style.css') }}">
  <link rel="stylesheet" href="/aos/dist/aos.css" />
  <script src="{{ url('js/flowbite.min.js') }}"></script>
  <script src="{{ url('fontawesome/js/all.min.js') }}"></script>
  @stack("style")
  <title>{{ $title ?? config('app.name', 'Laravel2') }}</title>
</head>
<body class="bg-fixed bg-cover bg-center font-Poppins" style="background-image: url(/images/bg_body.png)">
  <div class="@empty($isNav) container @endempty">
    @empty($isNav)
      <x-layouts.navbar/>
    @endempty
    @if (isset($header))
        <header class="w-full h-full bg-cover bg-center" style="background-image: url({{$bgHeader ?? '/images/bgHeader.png'}})">
            <div class="bg-brand-1/90">
              {{ $header }}
            </div>
        </header>
    @endif
    <div class="min-h-screen px-4">
      {{$slot}}
    </div>
  </div>
  <x-layouts.footer/>
  @stack("script")
  <script src="/aos/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 3000,
      offset: 0
    });
  </script>
</body>
</html>