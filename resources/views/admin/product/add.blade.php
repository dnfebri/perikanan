<x-layouts-main-admin>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Product
    </h2>
  </x-slot>

  <div class="py-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">

    <form action="{{ url('admin/product', []) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="name" id="name"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="name"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name
          Product</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="subtitle" id="subtitle"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="subtitle"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sub
          Title</label>
      </div>
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="input-img-thumbnail">Upload
            thumbnail</label>
          <input id="input-img-thumbnail" name="thumbnail"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="user_avatar_help" id="image_gallery" type="file">
          @error('thumbnail')
            <div id="thumbnail" class="text-sm text-red-500">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group flex flex-nowrap overflow-auto">
          <img src="{{ url('images/default-img.png') }}" style="height: 8rem;" id="img-previuw-thumbnail">
        </div>
      </div>
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_gallery">Upload
            Image</label>
          <input id="input-img" name="imageProduct[]"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="user_avatar_help" id="image_gallery" type="file" multiple>
          @error('imageProduct')
            <div id="imageProduct" class="text-sm text-red-500">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group flex flex-nowrap overflow-auto" id="img-previuw">
          <img src="{{ url('images/default-img.png') }}" style="height: 8rem;">
        </div>
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select id="category" name="category" class="border-0 border-b border-gray-300 text-gray-900 text-sm focus:ring-transparent focus:ring focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Select Category</option>
          @foreach($category as $key => $row)
            <option value="{{ $row['id'] }}">{{ $row['name'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-6">
        <label for="countries" class="block text-sm font-medium text-gray-900 dark:text-white">Active</label>
        <select id="countries" name="active" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option value="1" selected>Active</option>
            <option value="0">inActive</option>
        </select>
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <Label class="block" for="editor">description :</Label>
        <textarea name="description" id="editor"></textarea>
      </div>
      <button id="btn-submit" type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      <button id="btn-disabled" type="button" disabled
        class="hidden opacity-80 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Disablet</button>
    </form>

  </div>
  @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
        .create(document.querySelector('#editor'), {
          toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
          heading: {
            options: [{
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
              },
              {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'ck-heading_heading1'
              },
              {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
              }
            ]
          }
        })
        .catch(error => {
          console.error(error);
        });
    </script>
    <script>
      const inputImgThumbnail = document.querySelector('#input-img-thumbnail');
      const imgPreviewThumbnail = document.querySelector('#img-previuw-thumbnail')
      inputImgThumbnail.addEventListener('change', function (e) {
        const fileImg = new FileReader();
        fileImg.readAsDataURL(e.srcElement.files[0]);
        fileImg.onload = function (e) {
          imgPreviewThumbnail.src = e.target.result;
        }
      });

      const inputImg = document.querySelector('#input-img');
      const imgPreview = document.querySelector('#img-previuw')
      inputImg.addEventListener('change', function(e) {
        const arrayFileImage = Object.values(e.srcElement.files)
        imgPreview.innerHTML = ''
        arrayFileImage.forEach(row => {
          const fileImg = new FileReader();
          fileImg.readAsDataURL(row);
          fileImg.onload = function(el) {
            const nodeImg = `<img src=${el.target.result} style="height: 8rem;">`;
            imgPreview.innerHTML += nodeImg
          }
        });
      });
      const btnSubmid = document.getElementById('btn-submit');
      const btnDisabled = document.getElementById('btn-disabled');
      btnSubmid.addEventListener("click", function(e) {
        // btnDisabled.classList.toggle("hidden");
        // btnSubmid.classList.toggle("hidden");
      });
    </script>
  @endpush
</x-layouts-main-admin>
