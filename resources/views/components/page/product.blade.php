<div class="flex">
  <div class="max-w-md text-brand-2 space-y-4">
    <h1 class="text-3xl font-bold text-black">Our Product</h1>
    <p class="max-w-[13rem]">We offer the best variety of dishes, with the main ingredients always fresh with the best quality</p>
    @if ($category)
      @foreach ($category as $row)
      <div class="min-w-[15rem] font-bold">
        <button class="w-full py-2 border border-brand-2">{{ $row['name'] }}</button>
      </div>
      @endforeach  
    @endif
  </div>
  <div class="md:ml-8">
    @if($products)
      @foreach ($products as $row)
        <a href="{{ url('admin/product/' . $row['slug']) }}">
          <div class="w-[18rem] h-[28rem] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden">
            <img src="{{ url('images/' . $row['thumbnail']) }}" alt="{{ $row['name'] }}" class="w-full h-full object-cover object-center">
          </div>
        </a>
      @endforeach
    @endif
  </div>
</div>