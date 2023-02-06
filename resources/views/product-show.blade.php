<x-layouts-main>
  <x-slot name="header">
    <x-page.header/>
  </x-slot>
  <div class="p-4 md:px-10">
    @if(!$data)
    <div class="py-16 text-center text-3xl font-black">
      <h1>Product is Empty</h1>
    </div>
    @else
    <div class="my-10">
      <x-page.product-show :category="$category" :productcategory="$productCategory" :products="$data" :auth="false"/>
    </div>
    @endif
    </div>
</x-layouts-main>