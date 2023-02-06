<x-layouts-main-admin>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Product
    </h2>
    <div>
      <a href="{{ url('admin/product/edit/' . $data['slug']) }}" class="btn-edit">Edit Product</a>
      <button class="btn-delete">Delete Product</button>
    </div>
  </x-slot>

  <div class="py-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
    @if(!$data)
    <div class="py-16 text-center text-3xl font-black">
      <h1>Product is Still Empty</h1>
    </div>
    @else
    <x-page.product-show :category="$category" :products="$data" :auth="Auth::user()" />
    @endif
  </div>
</x-layouts-main-admin>


