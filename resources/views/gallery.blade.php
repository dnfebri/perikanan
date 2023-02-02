<x-layouts.main>
  <x-slot name="header">
    <x-page.header/>
  </x-slot>
  <div class="p-4 md:px-10">
    @if(!$data)
    <div class="py-16 text-center text-3xl font-black">
      <h1>Gallery is Still Empty</h1>
    </div>
    @else
      <x-page.gallery :gallery="$data" :auth="false"/>
    @endif
  </div>
</x-layouts.main>