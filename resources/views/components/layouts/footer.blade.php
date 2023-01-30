@php
  $dataMenu = [
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
<div class="bg-brand-2 pb-14 text-sm text-white">
  <div class="container py-4 px-4 grid md:grid-cols-3 gap-2 lg:gap-6">
    <div>
      <h1 class="text-lg text-secondary-1 font-bold">Follow Us</h1>
      <div class="text-xl py-2 flex gap-4">
        <div class="bg-white text-brand-2 h-8 w-8 flex justify-center items-center rounded-full">
          <i class="fa-brands fa-facebook-f"></i>
        </div>
        <div class="bg-white text-brand-2 h-8 w-8 flex justify-center items-center rounded-full">
          <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="bg-white text-brand-2 h-8 w-8 flex justify-center items-center rounded-full">
          <i class="fa-brands fa-linkedin-in"></i>
        </div>
      </div>
    </div>
    <div class="md:px-2">
      <h1 class="text-lg text-secondary-1 font-bold">Contact Us</h1>
      <div class="grid gap-2 my-2">
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </div>
    </div>
    <div>
      <h1 class="text-lg text-secondary-1 font-bold">Userfull Links</h1>
      <div class="my-2 grid grid-rows-4 grid-flow-col gap-2">
        @foreach($dataMenu as $key => $row)
          <a href="{{ url($row->url) }}">
            <p>{{ $row->label }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>