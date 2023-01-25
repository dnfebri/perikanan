<x-layouts-main-admin>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Product
    </h2>
  </x-slot>

  <div class="section-2-col">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              No
            </th>
            <th scope="col" class="px-6 py-3">
              Category Name
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key => $row)
            <tr id="data-rows" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <form action="{{ url('admin/product/category/' . $row->id) }}" method="post">
                @csrf
                @method('put')
                <td class="px-6 py-4">
                  {{ $key+1 }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <input value="{{ $row->name }}" type="text" name="name" readonly class="py-0 input-transparent" id="name">
                </th>
                <td class="px-6 py-4 space-x-2">
                  <button type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" id="edit">Edit</button>
                  <button type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline" id="delete">Delete</button>
                  <button type="button" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline" hidden id="cancel">Cancel</button>
                  <button type="submit" class="font-medium text-green-600 dark:text-green-500 hover:underline" hidden id="update">Update</button>
                </td>
              </form>
              <form action="{{ url('admin/product/category/' . $row->id . '?name=' . $row->name) }}" method="post" id="ProductDelete">
                @csrf
                @method('delete')
                {{-- <button id="delete" type="submit" class="btn inline badge bg-danger text-decoration-none mx-1">Delete</button> --}}
              </form>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="mb-8">
      <div class="flex justify-end">
        <button id="btn-add" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
        <button id="btn-cancel" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-blue-800 hidden">Cancel</button>
      </div>
      <form class="p-4 hidden" id="formPage" action="{{ url('admin/product/category') }}" method="post">
        @csrf
        <div class="mb-6">
          <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
          <input type="category" name="category" id="inputCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button id="btnSave" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
      </form>
    </div>

  </div>
  @push("script")
    <script>
      const btnAdd = document.querySelector("#btn-add");
      const btnCancel = document.querySelector("#btn-cancel");
      const formPage = document.querySelector("#formPage");
      const btnSave = document.querySelector("#btnSave");
      const inputCategory = document.querySelector("#inputCategory");

      btnAdd.addEventListener("click", () => {
        formPage.classList.toggle("hidden")
        btnAdd.classList.toggle("hidden")
        btnCancel.classList.toggle("hidden")
      });
      btnCancel.addEventListener("click", () => {
        formPage.classList.toggle("hidden")
        btnAdd.classList.toggle("hidden")
        btnCancel.classList.toggle("hidden")
      });
      btnSave.addEventListener("click", () => {
        if (inputCategory.value) {
          // btnSave.disabled = true
          btnSave.innerHTML = "Prosess..."
        }
      });

      function cancel() {
        document.querySelectorAll('#edit').forEach(row => {
          row.removeAttribute('hidden');
        });
        document.querySelectorAll('#delete').forEach(row => {
          row.removeAttribute('hidden');
        });
        document.querySelectorAll('#cancel').forEach(row => {
          row.setAttribute('hidden', true);
        });
        document.querySelectorAll('#update').forEach(row => {
          row.setAttribute('hidden', true);
        });
        document.querySelectorAll('#name').forEach(row => {
          row.classList.add('input-transparent');
          row.setAttribute('readonly', true);
        });
      }

      const dataRows = document.querySelectorAll('#data-rows');
      dataRows.forEach(row => {
        row.querySelector('#edit').addEventListener('click', () => {
          cancel();
          row.querySelector('#edit').setAttribute('hidden', true)
          row.querySelector('#delete').setAttribute('hidden', true)
          row.querySelector('#cancel').removeAttribute('hidden')
          row.querySelector('#update').removeAttribute('hidden')
          row.querySelector('#name').classList.remove('input-transparent');
          row.querySelector('#name').removeAttribute('readonly');
        })
        row.querySelector('#cancel').addEventListener('click', () => {
          cancel();
        })
        row.querySelector('#delete').addEventListener('click', () => {
          const hapus = confirm('apakah anda yakin?');
          if (hapus) {
            row.querySelector('#ProductDelete').submit();
            cancel();
          }
        })
      });
    </script>
  @endpush
</x-layouts-main-admin>


