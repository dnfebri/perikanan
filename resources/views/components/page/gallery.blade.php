@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
@endpush
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
  @isset($gallery)
  @foreach ($gallery as $key => $row)
    <div class="group/item h-72 @if($row["columns"] === 2) sm:col-span-2 @endif border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden relative">
      <img class="w-full h-full object-cover object-center" src="{{ url('images/' . $row["image"]) }}" alt="{{ $row["id"] }}" />
      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable"
        class="invisible absolute top-0 bottom-0 w-full p-4 cursor-pointer group-hover/item:visible" onclick="imgGallery(this)" img="{{ url('images/' . $row["image"]) }}"
      >
        @if ($auth)
          <span class="flex">
            <a href="{{ url('admin/gallery/' . $row["slug"]) }}" class="btn-edit z-10">Detail</a>
            <p type="submit" class="btn-delete" onclick="deleteImageKonfirm(this)">Delete</p>
            <form action="{{ url('admin/gallery?id=' . $row['id'] ) }}" method="post">
              @csrf
              @method('delete')
            </form>
          </span>
        @endif
        <div class="flex items-center justify-center h-full text-white font-bold">
          <p>{{ $row["name"] }}</p>
        </div>
      </button>
    </div>

  @endforeach
  @endisset
</div>

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-visible" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-xl relative">
    <div class="">
      <div class="p-4 min-h-[30rem] flex items-center" id="imgModal">
        <div class="absolute -top-0 -right-0">
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <img src="{{ url('images/default-img.png', []) }}" alt="Modal Ikan" class="mx-auto" >
      </div>
    </div>
  </div>
</div>

@push('script')
<script src="/js/test.js"></script>
  <script>
    const imgModal = document.querySelector("#imgModal");

    const imgGallery = (el) => {
      imgModal.querySelector('img').src = el.getAttribute("img")
    }
  </script>
  <script>
    const deleteImageKonfirm = (el) => {
      const hapus = confirm("apakah Anda yakin ?");
      if (hapus) {
        el.nextElementSibling.submit();
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endpush
