@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
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
    <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel" data-aos="fade-up">
      <div class="carousel-inner rounded-lg relative w-full overflow-hidden max-h-[35rem] shadow-xl">
        @foreach (json_decode($products['image']) as $key => $item)
          <div class="w-full h-96 @if($key === 0) active @endif carousel-item relative float-left overflow-hidden">
            <img src="{{ url('images/' . $item) }}" alt="Perikanan" class="w-full h-full object-cover object-center">
          </div>
        @endforeach
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
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endpush