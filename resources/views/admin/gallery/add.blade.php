<x-layouts-main-admin>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Gallery
    </h2>
  </x-slot>

  <div class="py-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">

    <form action="{{ url('admin/gallery', []) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="grid md:grid-cols-2 md:gap-6 items-center">
        <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
          <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name Image</label>
          @error('name')
            <div class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group">
          <label for="columns" class="block text-sm font-medium text-gray-900 dark:text-white">Select columns</label>
          <select id="columns" name="columns" class="border-0 border-b border-gray-300 text-gray-900 text-sm focus:ring-transparent focus:ring focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_gallery">Upload file</label>
          <input id="input-img" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="image_gallery" type="file">
          @error('image')
            <div id="image" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group">
          <img src="{{ url('images/default-img.png') }}" class="h-32 img-previuw">
        </div>
      </div>
      <button id="btn-submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      <button id="btn-disabled" type="button" disabled class="hidden opacity-80 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Disablet</button>
    </form>

  </div>
  @push("script")
    <script>
      const inputImg = document.querySelector('#input-img');
      const imgPreview = document.querySelector('.img-previuw')
      inputImg.addEventListener('change', function (e) {
          const fileImg = new FileReader();
          fileImg.readAsDataURL(e.srcElement.files[0]);
          fileImg.onload = function (e) {
              imgPreview.src = e.target.result;
          }
      });
      const btnSubmid = document.getElementById('btn-submit');
      const btnDisabled = document.getElementById('btn-disabled');
      btnSubmid.addEventListener("click", function (e) {
        btnDisabled.classList.toggle("hidden");
        btnSubmid.classList.toggle("hidden");
      });
    </script> 
  @endpush
</x-layouts-main-admin>
