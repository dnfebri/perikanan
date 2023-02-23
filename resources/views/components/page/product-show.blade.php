@push('style')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endpush
<div class="lg:flex gap-4">
  @if($products)
  {{-- @dd($products) --}}
  <div class="space-y-4">
    <div class="flex justify-between items-center pb-4">
      <h2 class="font-black text-3xl">
        Produk Detail
      </h2>
      @if($auth && $products['active'] === 0)
        <div class="px-4 py-1 text-red-700 border-2 border-red-700">inActive</div>
      @endif
    </div>
    <div class="swiper mySwiper" data-aos="fade-up">
      <div class="swiper-wrapper rounded-lg w-full max-w-sm max-h-[35rem] shadow-xl">
        @foreach (json_decode($products['image']) as $key => $item)
          <div class="swiper-slide w-full h-96 @if($key === 0) active @endif float-left overflow-hidden">
            <img src="{{ url('images/' . $item) }}" alt="Perikanan" class="w-full h-full object-cover object-center">
          </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="pt-4">
      <h2 class="font-black text-3xl" data-aos="fade-up">
        {{$products['name']}}
      </h2>
      <div class="view-description py-4" data-aos="fade-up">
        {!! $products['description'] !!}
      </div>
    </div>
  </div>
  <div class="mt-12 lg:pt-4 min-w-[18rem]">
    <h2 class="font-black text-xl mb-6" data-aos="fade-up">
      Daftar Produk Terkait
    </h2>
    <div class="grid gap-4">
      @php
        $n = 0;
      @endphp
      @foreach($productcategory as $key => $row)
        @if($row['id'] !== $products['id'] && $n < 3)
          <div data-aos="fade-up"
            class="mx-auto w-full max-w-xs h-[20rem] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden"
          >
            <a @if($auth)
                href="{{ url('admin/product/' . $row['slug']) }}"
              @else
                href="{{ url('product/' . $row['slug']) }}"
              @endif
            >
              <img src="{{ url('images/' . $row['thumbnail']) }}" alt="{{ $row['name'] }}" class="w-full h-full object-cover object-center">
            </a>
          </div>
          @php
            $n++
          @endphp
        @endif
      @endforeach
    </div>
  </div>
  @endif
</div>
@push('script')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    // loop: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
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