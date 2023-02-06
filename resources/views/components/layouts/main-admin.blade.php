<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <script src="{{ url('js/flowbite.min.js') }}"></script>
  <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('/css/style.css') }}">
  <script src="{{ url('fontawesome/js/all.min.js') }}"></script>
  @stack("style")
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
  <div class="container font-Poppins">
    <x-layouts.navbar-admin/>
    <div class="flex relative">
      <x-layouts.sidebar-admin/>
      <div class="w-full max-h-screen overflow-auto no-scrollbar">
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    {{ $header }}
                </div>
            </header>
        @endif
        <div class="m-2 min-w-min rounded-lg shadow-xl overflow-hidden">
          {{-- <div class="h-screen"></div> --}}
          {{$slot}}
        </div>
      </div>
    </div>
  </div>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script> --}}
  @stack("script")
  <script>
    const sidebarAdmin = document.querySelector("#sidebar-admin");
    function sidebarHendel() {
      sidebarAdmin.classList.toggle("sidebar")
      sidebarAdmin.classList.toggle("sidebar-active")
    }
  </script>
</body>
</html>