@php
  $path = explode("/",$_SERVER['REQUEST_URI']);
  $urlActive = $path[1];
  $titleHeader = str_replace("-", " ", ucwords($urlActive));
  if ($urlActive === "faq") {
    $titleHeader = "Frequently Asked Questions";
  }
@endphp
<div class="pt-14 px-8 sm:px-16 lg:px-44 min-h-[15rem] md:min-h-[21rem] space-y-2 flex flex-col justify-center">
  <h1 class="text-secondary-1 text-3xl font-bold tracking-widest">{{ $titleHeader }}</h1>
  <h2 class="text-white text-xl">
    <a href="{{ url('home') }}" class="hover:text-brand-4 transition-all duration-300">Home</a> / {{str_replace("-", " ", ucwords($urlActive))}}
  </h2>
</div>