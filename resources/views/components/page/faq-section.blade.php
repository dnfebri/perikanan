<div class="container lg:px-12 min-h-screen pt-4">
  <form action="">
    <div class="flex justify-center items-center my-4">
      {{-- <table class="border-collapse border border-slate-500">
        <tr>
          <td class="border border-slate-500">
            <input class="outline-none h-8 md:w-80 px-4" type="text" name="search" id="search" placeholder="Have a Question">
          </td>
          <td class="border border-slate-500">
            <button class="w-12 h-8" type="button">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </td>
        </tr>
      </table> --}}
    </div>
  </form>

  <div class="flex flex-wrap justify-center items-center space-x-4 lg:space-x-10 font-PoppinsSemiBold">
  </div>
  <div class="grid grid-cols-1 gap-4 md:grid-cols-3 text-sm mt-4">
    <div class="space-y-6">
      @foreach ($faq as $key => $item)
      @if ($key % 3 === 0)
        <div class="border-2 border-black m-1 px-2 py-4 cursor-pointer" data-aos="fade-up">
          <div class="font-black flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="">{{ $item["questions"] }}</h2>
            <span class=" text-xl rotate-90 transition-all duration-300">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <div class="view-answer">{!! $item["answer"] !!}</div>
          </div>
          @if ($auth)
            <div class="-mb-2 mt-2">
              <a href="{{ url('admin/faq/' . $item["id"]) }}" class="py-0.5 px-4 rounded-md drop-shadow-xl hover:drop-shadow-2xl bg-blue-700 text-white hover:bg-blue-600 hover:text-black transition-all duration-300">Edit</a>
              <a type="button" class="py-0.5 px-4 rounded-md drop-shadow-xl hover:drop-shadow-2xl bg-red-700 text-white hover:bg-red-600 hover:text-black transition-all duration-300" onclick="deleteKonfirm(this)">Delete</a>
              <form action="{{ url('admin/faq?id=' . $item['id'] ) }}" method="post">
                @csrf
                @method('delete')
              </form>
            </div>
          @endif
        </div>
      @endif
      @endforeach
    </div>
    <div class="space-y-6">
      @foreach ($faq as $key => $item)
      @if ($key % 3 === 1)
        <div class="border-2 border-black m-1 px-2 py-4 cursor-pointer" data-aos="fade-up">
          <div class="font-black flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="">{{ $item["questions"] }}</h2>
            <span class=" text-xl rotate-90 transition-all duration-300">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <div class="view-answer">{!! $item["answer"] !!}</div>
          </div>
          @if ($auth)
            <div class="-mb-2 mt-2">
              <a href="{{ url('admin/faq/' . $item["id"]) }}" class="py-0.5 px-4 rounded-md drop-shadow-xl hover:drop-shadow-2xl bg-blue-700 text-white hover:bg-blue-600 hover:text-black transition-all duration-300">Edit</a>
              <a type="button" class="py-0.5 px-4 rounded-md drop-shadow-xl hover:drop-shadow-2xl bg-red-700 text-white hover:bg-red-600 hover:text-black transition-all duration-300" onclick="deleteKonfirm(this)">Delete</a>
              <form action="{{ url('admin/faq?id=' . $item['id'] ) }}" method="post">
                @csrf
                @method('delete')
              </form>
            </div>
          @endif
        </div>
      @endif
      @endforeach
    </div>
    <div class="space-y-6">
      @foreach ($faq as $key => $item)
      @if ($key % 3 === 2)
        <div class="border-2 border-black m-1 px-2 py-4 cursor-pointer" data-aos="fade-up">
          <div class="font-black flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="">{{ $item["questions"] }}</h2>
            <span class=" text-xl rotate-90 transition-all duration-300">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <div class="view-answer">{!! $item["answer"] !!}</div>
          </div>
          @if ($auth)
            <div class="-mb-2 mt-2">
              <a href="{{ url('admin/faq/' . $item["id"]) }}" class="py-0.5 px-4 rounded-md drop-shadow-xl hover:drop-shadow-2xl bg-blue-700 text-white hover:bg-blue-600 hover:text-black transition-all duration-300">Edit</a>
              <a type="button" class="py-0.5 px-4 rounded-md drop-shadow-xl hover:drop-shadow-2xl bg-red-700 text-white hover:bg-red-600 hover:text-black transition-all duration-300" onclick="deleteKonfirm(this)">Delete</a>
              <form action="{{ url('admin/faq?id=' . $item['id'] ) }}" method="post">
                @csrf
                @method('delete')
              </form>
            </div>
          @endif
        </div>
      @endif
      @endforeach
    </div>
  </div>
</div>
@push('script')
  <script>
    let cardFaqs = document.querySelectorAll("#card-faq")
    let cardDetails = document.querySelectorAll("#card-detail")
    cardFaqs.forEach(cardFaq => {
      cardFaq.addEventListener('click', () => {
        cardFaqs.forEach(cardFaq => {
          cardFaq.querySelector("span").classList.add('rotate-90');
        });
        cardDetails.forEach(cardDetail => {
          cardDetail.classList.add('hidden');
        });
        cardFaq.querySelector("span").classList.remove('rotate-90');
        cardFaq.nextElementSibling.classList.remove('hidden');
      })
    });

    const deleteKonfirm = (el) => {
      const hapus = confirm("apakah Anda yakin ?");
      if (hapus) {
        el.nextElementSibling.submit();
      }
    }
  </script>
@endpush