@php
  // take the url path into an array "/", array[1] for menu
  $path = explode("/",$_SERVER['REQUEST_URI']);
  $urlActive = $path[1];
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
      "icon" => "fa-circle-question",
      "label" => "Faqs",
      "url" => "/faqs",
    ],
    (object)[
      "icon" => "fa-address-book",
      "label" => "Contact",
      "url" => "/contact",
    ],
  ];
@endphp
<nav class="border-gray-200 dark:bg-gray-900 dark:border-gray-700 fixed top-0 right-0 left-0 z-30 transition-all duration-500" id="navbar">
  <div class="container h-12 md:min-h-[4rem] flex items-center mx-auto relative overflow-hidden">
    <div class="w-full">
      <ul class="
        flex flex-col justify-center items-center font-bold
        md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0
        dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700
      ">
        @foreach ($dataMenu as $key => $menu)
          <li>
            <a href="{{$menu->url}}" 
              class="hidden md:block h-7 @if (explode("/",$menu->url)[1] === $urlActive) menu-nav-active @else menu-nav @endif" @if ($menu->url === "/") aria-current="page" @endif
            >{{$menu->label}}
            </a>
          </li>
          @if($key === 2)
            <li>
              <a href="/" class="flex items-center mx-4">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-10" alt="Flowbite Logo" />
              </a>
            </li>
          @endif
        @endforeach
      </ul>
    </div>
    
  </div>

  <div class="md:hidden fixed bottom-0 right-0 left-0 flex items-center px-6 overflow-hidden bg-white border border-brand-1 rounded-t-2xl w-full">
    <div class="relative flex items-center justify-around w-full" id="navMobile">
      @foreach ($dataMenu as $idx => $menu)
        @if(explode("/",$menu->url)[1] === $urlActive) <span class="hidden" id="navAcctive" data-navAcctive="{{$idx}}"></span> @endif
        <a href="{{$menu->url}}" onclick="setActiveLink({{$idx}})" class="grid pt-2 grid-cols-1 grid-rows-1">
          <span class="sr-only"></span>
          <div class="flex items-center justify-center min-w-max h-12 @if (explode("/",$menu->url)[1] === $urlActive) menu-nav-active @else menu-nav @endif">
            <i class="fa-solid {{$menu->icon}} text-xl"></i>
            <span class="ml-2 hidden sm:inline">{{$menu->label}}</span>
          </div>
          {{-- <div class="col-[1/1] row-[1/1] flex items-center justify-center w-16 h-16 transition-opacity duration-300" > icon</div> --}}
        </a>
      @endforeach
    </div>

    <div id="indicator" class="absolute w-6 h-8 transition-all duration-300 bg-brand-1 rounded-full -top-4 left-0 right-0">
      <div style="box-shadow: 0 -10px 0 #173E65" class="absolute top-1/2 w-5 h-5 bg-white -left-4 rounded-tr-3xl"></div>
      <div style="box-shadow: 0 -10px 0 #173E65" class="absolute top-1/2 w-5 h-5 bg-white -right-4 rounded-tl-3xl"></div>
    </div>
  </div>
</nav>
@push("script")
  <script>
    // NavMobile
    let indicator = document.querySelector("#indicator");
    let getNavAcctive = document.querySelector("#navAcctive");
    let NAcctive = 1 + Number(navAcctive.getAttribute("data-navAcctive"));
    const nav = document.querySelector("#navMobile");
    let wNav = nav.offsetWidth / 6;

    function setActiveLink(n) {
      console.log(n);
      // e.preventDefault();
      wNav = nav.offsetWidth / 6;
      
      indicator.style.transform = `translateX(calc(${wNav * n}px))`;
      indicator.style.margin = `0px 0px 0px ${wNav / 2 + 12}px`;
    }
    const body = document.body;
      body.onload = navLoad;
      function navLoad() {
        indicator.style.margin = `0px 0px 0px ${(wNav * NAcctive + 12) - (wNav / 2)}px`;
      }
  </script>
  <script>
    const navbar = document.querySelector('#navbar');
    window.onscroll = function () {
      const fixedNav = navbar.offsetTop;

      if (window.pageYOffset > fixedNav + 100) {
        navbar.classList.add('bg-white');
      } else {
        navbar.classList.remove('bg-white');
      }
    }
  </script>
@endpush
