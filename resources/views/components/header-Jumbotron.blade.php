@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="{{url("css/tw-elements/index.min.css")}}" />
@endpush
<div>
  <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
    <div class="carousel-inner relative w-full overflow-hidden h-[80vh] md:h-[35rem]">
      <div class="carousel-item active relative float-left w-full h-full overflow-hidden pt-16 bg-white">
        <video class="h-full w-screen object-cover object-center brightness-50" autoplay muted loop>
          <source src="{{ url('videos/bgImageExample.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="w-full py-16 h-full carousel-item relative float-left ">
        <div class="px-12 py-4 h-full flex flex-col-reverse md:flex-row items-center">
          <div class="text-white space-y-2 md:w-1/2 flex justify-end">
            <div class="max-w-lg xl:pl-4">
              <h1 class="text-4xl font-bold">Nusantara Sea</h1>
              <h2 class="text-secondary-1 text-2xl font-bold">Premium Frozen Seafood</h2>
              <p class="py-2">Nusantara Sea is a company engaged in the export of marine product commodities in the form of seafood, ranging from various types of shrimp, crabs, and many more.</p>
              <button type="button" class="btn-outline">Learn More</button>
            </div>
          </div>
          <div class="md:w-1/2">
            <img src="{{ url('/images/ikanHeader.png') }}" alt="Perikanan" class="w-full max-w-lg">
          </div>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
      type="button"
      data-bs-target="#carouselExampleControls"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
      type="button"
      data-bs-target="#carouselExampleControls"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endpush