<x-layouts-main-admin>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      FAQ
    </h2>
    {{-- <a href="{{ url('admin/gallery/add', []) }}" class="btn-add">Add Faq</a> --}}
    <!-- Modal toggle -->
    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="btn-add" type="button">
      Add Faq
    </button>
  </x-slot>

  <div class="py-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
    @if (!$data)
      <div class="py-16 text-center text-3xl font-black">
        <h1>Faq is Still Empty</h1>
      </div>
    @else
      <x-page.faq-section :faq="$data" :auth="Auth::user()" />
    @endif
  </div>



  <!-- Main modal -->
  <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Add FAQ
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="staticModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <form action="{{ url('admin/faq') }}" method="post">
          @csrf
          <!-- Modal body -->
          <div class="p-6 space-y-6">
            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="questions" id="questions"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
              <label for="questions"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Questions</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
              <Label class="block">Answer :</Label>
              {{-- <textarea name="answer" id="answer" cols="30" rows="10"></textarea> --}}
              {{-- <textarea class="ckeditor form-control" name="wysiwyg-editor" value="asd"></textarea> --}}
              <textarea name="answer" id="editor"></textarea>
            </div>
          </div>
          <!-- Modal footer -->
          <div
            class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
            <button data-modal-hide="staticModal" type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
              Save</button>
            <button data-modal-hide="staticModal" type="button"
              class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
        .create(document.querySelector('#editor'), {
          removePlugins: ['Heading'],
          toolbar: ['bold', 'italic', 'underline'
            'bulletedList', 'numberedList', 'blockQuote'
          ]
        })
        .catch(error => {
          console.error(error);
        });
    </script>
  @endpush

</x-layouts-main-admin>