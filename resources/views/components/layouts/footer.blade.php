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
      "label" => "Faq",
      "url" => "/faq",
    ],
  ];
@endphp
<div class="bg-cover bg-center" style="background-image: url(/images/bgFooter.png)">
  <div class="bg-brand-1/80 pb-14 md:pb-0 text-sm text-white">
    <div class="container py-8 font-thin">
      <div class="py-4 px-4 grid md:grid-cols-3 gap-2 lg:gap-6">
        <div>
          <h1 class="text-lg text-secondary-1 font-bold">Follow Us</h1>
          <x-link-sosmed/>
        </div>
        <div class="md:px-2">
          <h1 class="text-lg text-secondary-1 font-bold">Contact Us</h1>
          <div class="grid gap-4 my-2 max-w-xs">
            <div>
              <a target="_blank"
                href="https://www.google.co.id/maps/search/Sambikerep+Highway,+Lontar,+Sambikerep+District+60225.+Surabaya+City,+Capital+of+East+Java,+Indonesia/@-7.2898788,112.6796867,15z/data=!3m1!4b1"
              >
                <p>Sambikerep Highway, Lontar, Sambikerep District 60225. Surabaya City, Capital of East Java, Indonesia</p>
              </a>
            </div>
            <div>
              <p>+62 821-4354-9969</p>
            </div>
          </div>
        </div>
        <div>
          <h1 class="text-lg text-secondary-1 font-bold">Userfull Links</h1>
          <div class="my-2 grid grid-rows-4 grid-flow-col gap-2 max-w-sm">
            @foreach($dataMenu as $key => $row)
              <a href="{{ url($row->url) }}">
                <p>{{ $row->label }}</p>
              </a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="border-t text-center pt-4">
        <p>Copyright © 2023. All right reserved</p>
      </div>
    </div>
  </div>
</div>