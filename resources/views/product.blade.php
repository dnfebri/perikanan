@php
  $data=[
    (object)[
      "icon" => "fa-globe",
      "label" => "Home",
      "url" => "/home",
    ],
    (object)[
      "icon" => "fa-id-card-clip",
      "label" => "About Us",
      "url" => "/about-us",
    ],
    (object)[
      "icon" => "fa-shrimp",
      "label" => "Product",
      "url" => "/product",
    ],
    (object)[
      "icon" => "fa-images",
      "label" => "Gallery",
      "url" => "/gallery",
    ],
    (object)[
      "icon" => "fa-address-book",
      "label" => "Contact",
      "url" => "/contact",
    ],
    (object)[
      "icon" => "fa-circle-question",
      "label" => "Faqs",
      "url" => "/faqs",
    ],
  ];
@endphp
<x-layouts-main>
  <x-slot name="header">
    <x-page.header/>
  </x-slot>
  <div class="p-4 md:px-10">
    @if(!$data)
    <div class="py-16 text-center text-3xl font-black">
      <h1>Gallery is Still Empty</h1>
    </div>
    @else
      <x-page.product :products="$data" :auth="false"/>
    @endif
    </div>
</x-layouts-main>