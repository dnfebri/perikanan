<div class="grid gap-4 md:flex">
  <div class="max-w-md text-brand-2 space-y-4">
    <h1 class="text-3xl font-bold text-black" data-aos="fade-up">Our Product</h1>
    <p class="max-w-[13rem]" data-aos="fade-up">We offer the best variety of dishes, with the main ingredients always fresh with the best quality</p>
    @if ($category)
      @foreach ($category as $row)
      <div class="min-w-[15rem] font-bold" data-aos="fade-up">
        <button class="w-full py-2 border border-brand-2">{{ $row['name'] }}</button>
      </div>
      @endforeach  
    @endif
  </div>
  <div class="md:ml-4 w-full">
    <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-4">
      @if($products)
        @foreach ($products as $row)
        <div data-aos="fade-up"
          class="relative mx-auto w-full max-w-xs h-[20rem] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden"
        >
          <a @if($auth)
              href="{{ url('admin/product/' . $row['slug']) }}"
            @else
              href="{{ url('product/' . $row['slug']) }}"
            @endif
          >
            <img src="{{ url('images/' . $row['thumbnail']) }}" alt="{{ $row['name'] }}" class="w-full h-full object-cover object-center">
          </a>
          @if($auth && $row['active'] === 0)
            <div class="absolute top-0 right-0 m-2 px-4 py-1 text-red-700 border-2 border-red-700">inActive</div>
          @endif
        </div>
        @endforeach
      @endif
    </div>
  </div>
</div>