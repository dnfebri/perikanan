<x-layouts.main isNav=false>
  @push('style')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&family=Poly&display=swap" rel="stylesheet">
  @endpush
  <div class="h-screen relative">
    <video class="h-screen w-screen object-cover object-center brightness-50" autoplay muted loop>
      <source src="{{ url('videos/bgImageExample.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="absolute top-0 bottom-0 right-0 left-0 flex justify-center items-center my-24 mx-8">
      {{-- <div class="w-full h-full max-w-2xl rounded" style="background-image: url({{ url('images/img_index.png') }})"> --}}
      {{-- <div class="w-full h-full max-w-3xl bg-white/70 blur-3xl rounded">
      </div> --}}
    </div>
    <div class="absolute top-0 bottom-0 right-0 left-0 flex justify-center items-center">
      <div class="text-center font-bold">
        <h1 class="text-2xl sm:text-4xl md:text-6xl lg:text-8xl text-white tracking-wider"
          style="font-family: 'Montserrat', sans-serif;"
        >
          NUSANTARA SEA
        </h1>
        <p class="my-4 text-base sm:text-2xl md:text-3xl lg:text-5xl text-secondary-1 tracking-wide"
          style="font-family: 'Montserrat', sans-serif; font-family: 'Poly', serif;"
        >
          Premium Frozen Seafood
        </p>
      </div>
    </div>
    {{-- <a onclick="callLoading()" href="{{ url('home', []) }}">Home</a> --}}
    <div id="loading" class="hidden absolute top-0 bottom-0 left-0 right-0 flex justify-center items-center bg-brand-2/50">
      <img src="{{ url('gif/loading-4.gif') }}" alt="Loading" class="w-56">
    </div>
    <div class="mb-10 fixed bottom-0 right-0 left-0 text-center">
      <a href="{{ url('home', []) }}" onclick="callLoading()" 
        class="py-2 px-5 md:py-4 md:px-10 drop-shadow-lg border-2 text-white 
          hover:border-secondary-1 hover:text-secondary-1
          text-2xl
          transition-all duration-300
        "
      >
        Learn More
      </a>
    </div>
  </div>
  @push("script")
    <script>
      const loadingPage = document.querySelector("#loading")

      const callLoading = () => {
        loadingPage.classList.remove("hidden")
      }
    </script>
  @endpush
</x-layouts.main>