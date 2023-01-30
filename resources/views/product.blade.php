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
  <x-page.product :products="$data"/>
</x-layouts-main>