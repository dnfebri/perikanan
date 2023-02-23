<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- Demo styles -->
  <style>

    .swiper {
      width: 100%;
      height: 100%;
    }

  </style>
</head>
<body>

  
  
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="relative float-left w-full h-full overflow-hidden pt-16 bg-white">
          <video class="h-full w-screen object-cover object-center brightness-50" autoplay muted loop>
            <source src="{{ url('videos/bgImageExample.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-full py-16 h-full relative float-left ">
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
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    {{-- <div class="swiper-pagination"></div> --}}
  </div>

  {{-- <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      // cssMode: true,
      spaceBetween: 300,
      // centeredSlides: true,
      effect: "fade",
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      mousewheel: true,
      keyboard: true,
    });
  </script> --}}

  
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2500,
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
</body>
</html>