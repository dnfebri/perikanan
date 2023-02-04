<x-layouts-main-admin>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      FAQ
    </h2>
  </x-slot>

  <div class="py-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
    <form action="{{ url('admin/faq/' . $faq['id']) }}" method="post">
      @method('put')
      @csrf
      <div class="p-6 space-y-6">
        <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="questions" id="questions" value="{{ $faq['questions'] }}"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required />
          <label for="questions"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Questions</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
          <Label class="block">Answer :</Label>
          <textarea name="answer" id="editor" class="view-answer px-4">{{ $faq['answer'] }}</textarea>
        </div>
        <div>
          <label for="countries" class="block text-sm font-medium text-gray-900 dark:text-white">is Active</label>
          <select id="countries" name="isActive" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
              <option>Choose</option>
              <option value="1" @if($faq['isActive'] === 1) selected @endif>Active</option>
              <option value="0" @if($faq['isActive'] === 0) selected @endif>is Active</option>
          </select>
        </div>
        <button id="btn-submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        <button id="btn-disabled" type="button" disabled class="hidden opacity-80 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Loading...</button>
      </div>
    </form>
  </div>

  @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
        .create(document.querySelector('#editor'), {
        removePlugins: [ 'Heading' ],
          toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
        })
        .catch(error => {
          console.error(error);
        });
    </script>
    <script>
      const btnSubmid = document.getElementById('btn-submit');
      const btnDisabled = document.getElementById('btn-disabled');
      btnSubmid.addEventListener("click", function (e) {
        btnDisabled.classList.toggle("hidden");
        btnSubmid.classList.toggle("hidden");
      });
    </script>
  @endpush

</x-layouts-main-admin>