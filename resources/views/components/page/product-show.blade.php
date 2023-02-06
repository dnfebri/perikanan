@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
@endpush
<div>
  @if($products)
  {{-- @dd($products) --}}
  <div class="space-y-4">
    <h2 class="font-black text-3xl">
      Produk Detail
    </h2>
    <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
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
    <div>
      <h2 class="font-black text-3xl">
        {{$products['name']}}
      </h2>
      <div class="view-description py-4">
        {!! $products['description'] !!}
      </div>
    </div>
  </div>
  <div class="py-12">
    <h2 class="font-black text-xl">
      Daftar Produk Terkait
    </h2>
  </div>
  @endif
</div>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endpush