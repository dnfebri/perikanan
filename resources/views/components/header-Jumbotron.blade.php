@push('style')
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endpush
<div>
  <div class="relative swiper mySwiper">
    <div class="relative w-full swiper-wrapper">
      <div class="relative float-left w-full h-full max-h-[50rem] pt-16 bg-white overflow-hidden swiper-slide">
        <video class="min-h-[50rem] w-screen object-cover object-center brightness-50" autoplay muted loop>
          <source src="{{ url('videos/bgImageExample.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="w-full py-16 min-h-[50rem] relative float-left 
       swiper-slide"
      >
        <div class="px-12 py-4 flex flex-col-reverse md:flex-row justify-center items-center
          absolute top-0 bottom-0 left-0 right-0"
        >
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
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  
</div>
@push('script')
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endpush