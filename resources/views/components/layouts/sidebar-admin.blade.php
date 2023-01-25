@php
  // take the url path into an array "/", array[1] for menu
  $path = explode("/",$_SERVER['REQUEST_URI']);
  $urlActive = $path[1];
  $dataSidebar = [
    (object)[
      "icon" => "fa-house",
      "label" => "Dashboard",
      "menu" => "/dashboard"
    ],
    (object)[
      "icon" => "fa-globe",
      "label" => "Home",
      "menu" => [
        (object)[
          "name" => "Header",
          "url" => "#"
        ]
      ]
    ],
    (object)[
      "icon" => "fa-shrimp",
      "label" => "Product",
      "menu" => [
        (object)[
          "name" => "Kategory",
          "url" => "/admin/product/category"
        ]
      ]
    ],
    (object)[
      "icon" => "fa-id-card-clip",
      "label" => "About Us",
      "menu" => [
        (object)[
          "name" => "About",
          "url" => "#"
        ]
      ]
    ],
  ];
@endphp

<aside class="sidebar transition-all duration-300" aria-label="Sidebar" id="sidebar-admin">
  <div class="px-3 py-4 overflow-y-auto no-scrollbar rounded bg-gray-50 dark:bg-gray-800 h-full">
    <ul class="space-y-2">
      @foreach($dataSidebar as $key => $sidebar)
        <li>
          @if (is_array($sidebar->menu))
            <button type="button" class="flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group menu-sidebar " aria-controls="{{'dropdown-example' . $key}}" data-collapse-toggle="{{'dropdown-example' . $key}}">
              <i class="fa-solid {{$sidebar->icon}} text-xl
                transition duration-75
                ">
              </i>
              <span class="flex-1 ml-2 text-left whitespace-nowrap font-bold" sidebar-toggle-item>{{$sidebar->label}}</span>
              <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <ul id="{{'dropdown-example' . $key}}" class="hidden py-2 space-y-2">
              @foreach($sidebar->menu as $idx => $menu)
                <li>
                  <a href="{{ $menu->url }}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-12 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{$menu->name}}</a>
                </li>
              @endforeach
            </ul>
          @else
            <a href="{{$sidebar->menu}}" class="flex items-center w-full p-2 text-base font-normal transition duration-75 rounded-lg group @if (explode("/",$sidebar->menu)[1] === $urlActive) menu-sidebar-active @else menu-sidebar @endif" >
              <i class="fa-solid {{$sidebar->icon}} text-lg
                transition duration-75
                ">
              </i>
              <span class="flex-1 ml-1 text-left whitespace-nowrap font-bold" sidebar-toggle-item>{{$sidebar->label}}</span>
            </a>
          @endif
        </li>
      @endforeach
    </ul>
  </div>
</aside>

