@php
  // take the url path into an array "/", array[1] for menu
  $path = explode("/",$_SERVER['REQUEST_URI']);
  $urlActive = $path[1];
  $dataMenu = [
    (object)[
      "icon" => "icon",
      "label" => "Home",
      "url" => "/",
    ],
    (object)[
      "icon" => "icon",
      "label" => "Product",
      "url" => "/product",
    ],
    (object)[
      "icon" => "icon",
      "label" => "About Us",
      "url" => "/about-us",
    ],
  ];
@endphp
<nav class="my-2 border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="container flex flex-wrap items-center justify-between mx-auto relative">
    <a href="#" class="flex items-center ml-4">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-10" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <div class="hidden w-full sm:block sm:w-auto sm:mr-4">
      <ul class="flex flex-col py-4 mt-4 border border-gray-100 rounded-lg bg-gray-50/80 sm:flex-row sm:space-x-8 sm:mt-0 sm:text-sm sm:font-medium sm:border-0 sm:bg-white dark:bg-gray-800 sm:dark:bg-gray-900 dark:border-gray-700">
        @foreach ($dataMenu as $menu)
          <li>
            <a href="{{$menu->url}}" 
              class="block py-2 pl-3 pr-4 @if (explode("/",$menu->url)[1] === $urlActive) menu-nav-active @else menu-nav @endif" @if ($menu->url === "/") aria-current="page" @endif
            >{{$menu->label}}
            </a>
          </li>
        @endforeach
        {{-- <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 sm:hover:bg-transparent sm:border-0 sm:hover:text-blue-700 sm:p-0 sm:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 sm:dark:hover:bg-transparent">Dropdown <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                    <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Overview</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My downloads</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Billing</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Rewards</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </li> --}}
      </ul>
    </div>
  </div>

  <div class="sm:hidden fixed bottom-0 right-0 left-0 flex items-center px-6 overflow-hidden bg-white border-4 border-purple-500 rounded-t-2xl w-full">
    <div class="relative flex items-center justify-around w-full" id="navMobile">
      @foreach ($dataMenu as $idx => $menu)
        @if(explode("/",$menu->url)[1] === $urlActive) <span class="hidden" id="navAcctive" data-navAcctive="{{$idx}}"></span> @endif
        <a href="{{$menu->url}}" onclick="setActiveLink({{$idx}})" class="grid w-16 h-16 grid-cols-1 grid-rows-1">
          <span class="sr-only"></span>
          <div class="col-[1/1] row-[1/1] flex items-center justify-center min-w-max h-16">
            <i class="fa-solid fa-id-card-clip text-purple-500"></i>
          </div>
          {{-- <div class="col-[1/1] row-[1/1] flex items-center justify-center w-16 h-16 transition-opacity duration-300" > icon</div> --}}
        </a>
      @endforeach
    </div>

    <div id="indicator" class="absolute w-6 h-8 transition-all duration-300 bg-purple-500 rounded-full -top-4 left-0 right-0">
      <div style="box-shadow: 0 -10px 0 #9061F9" class="absolute top-1/2 w-5 h-5 bg-white -left-4 rounded-tr-3xl"></div>
      <div style="box-shadow: 0 -10px 0 #9061F9" class="absolute top-1/2 w-5 h-5 bg-white -right-4 rounded-tl-3xl"></div>
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
    let wNav = nav.offsetWidth / 3;

    function setActiveLink(n) {
      console.log(n);
      // e.preventDefault();
      wNav = nav.offsetWidth / 3;
      
      indicator.style.transform = `translateX(calc(${wNav * n}px))`;
      indicator.style.margin = `0px 0px 0px ${wNav / 2 + 12}px`;
    }
    const body = document.body;
      body.onload = navLoad;
      function navLoad() {
        indicator.style.margin = `0px 0px 0px ${(wNav * NAcctive + 12) - (wNav / 2)}px`;
      }
  </script>
@endpush
