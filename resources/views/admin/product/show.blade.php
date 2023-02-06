<x-layouts-main-admin>
  <x-slot name="header">
    <a href="{{ url('admin/product') }}">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Product
      </h2>
    </a>
    <div>
      <a href="{{ url('admin/product/edit/' . $data['slug']) }}" class="btn-edit">Edit Product</a>
      <button class="btn-delete" onclick="deleteImageKonfirm(this)">Delete Product</button>
      <form action="{{ url('admin/product?id=' . $data['id'] ) }}" method="post">
        @csrf
        @method('delete')
      </form>
    </div>
  </x-slot>

  <div class="py-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
    @if(!$data)
    <div class="py-16 text-center text-3xl font-black">
      <h1>Product is Still Empty</h1>
    </div>
    @else
    <x-page.product-show :category="$category" :productcategory="$productCategory" :products="$data" :auth="Auth::user()" />
    @endif
  </div>
  @push('script')
  <script>
    const deleteImageKonfirm = (el) => {
      const hapus = confirm("apakah Anda yakin ?");
      if (hapus) {
        el.nextElementSibling.submit();
      }
    }
  </script>
  @endpush
</x-layouts-main-admin>


