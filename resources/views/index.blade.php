<x-layouts.main isNav=false>
  <div class="h-screen relative">
    <video class="h-screen w-screen object-cover object-center brightness-50" autoplay muted loop>
      <source src="{{ url('videos/bgImageExample.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="absolute top-0 bottom-0 right-0 left-0 flex justify-center items-center my-24 mx-8">
      {{-- <div class="w-full h-full max-w-2xl rounded" style="background-image: url({{ url('images/img_index.png') }})"> --}}
      <div class="w-full h-full max-w-3xl bg-white/60 blur-md rounded">
      </div>
    </div>
    <div class="absolute top-0 bottom-0 right-0 left-0 flex justify-center items-center">
      <div class="text-center font-bold">
        <h1 class="text-2xl sm:text-5xl">NUSANTARA SEA</h1>
        <p class="my-4 text-sm sm:text-base text-brand-1">Premium Frozen Seafood</p>
        <div class="mt-10">
          <a href="{{ url('home', []) }}" onclick="callLoading()" 
            class="py-2 px-6 border border-brand-1 rounded-lg drop-shadow-lg text-brand-1 
              hover:text-white hover:bg-brand-1
              transition-all duration-300
            "
          >
            Home
          </a>
        </div>
      </div>
    </div>
    {{-- <a onclick="callLoading()" href="{{ url('home', []) }}">Home</a> --}}
    <div id="loading" class="hidden absolute top-0 bottom-0 left-0 right-0 flex justify-center items-center bg-brand-2/50">
      <img src="{{ url('gif/loading-4.gif') }}" alt="Loading" class="w-56">
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