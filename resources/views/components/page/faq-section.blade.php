@php
  $data = [
    [
      "questions" => "1 Berapakah biaya keanggotaan di Urban Athletes?",
      "answer" => "Biaya keanggotaan berbeda mengikuti paket yang sesuai dengan pilihan Anda. Silahkan hubungi club pilihan Anda dan staf kami akan menjelaskan berbagai opsi dengan senang hati."
    ],
    [
      "questions" => "2 Berapakah biaya keanggotaan di Urban Athletes?",
      "answer" => "Biaya keanggotaan berbeda mengikuti paket yang sesuai dengan pilihan Anda. Silahkan hubungi club pilihan Anda dan staf kami akan menjelaskan berbagai opsi dengan senang hati."
    ],
    [
      "questions" => "3 Berapakah biaya keanggotaan di Urban Athletes?",
      "answer" => "Biaya keanggotaan berbeda mengikuti paket yang sesuai dengan pilihan Anda. Silahkan hubungi club pilihan Anda dan staf kami akan menjelaskan berbagai opsi dengan senang hati."
    ],
    [
      "questions" => "4 Berapakah biaya keanggotaan di Urban Athletes?",
      "answer" => "Biaya keanggotaan berbeda mengikuti paket yang sesuai dengan pilihan Anda. Silahkan hubungi club pilihan Anda dan staf kami akan menjelaskan berbagai opsi dengan senang hati."
    ],
];
@endphp
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
      @foreach ($data as $key => $item)
      @if ($key % 3 === 0)
        <div class="border border-black m-1 px-2 py-4 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-AmpleSoftBold">{{ $item["questions"] }}</h2>
            <span class="font-AmpleSoftBold text-xl rotate-90 transition-all duration-300">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>{{ $item["answer"] }}</p>
          </div>
        </div>
      @endif
      @endforeach
    </div>
    <div class="space-y-6">
      @foreach ($data as $key => $item)
      @if ($key % 3 === 1)
        <div class="border border-black m-1 px-2 py-4 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-AmpleSoftBold">{{ $item["questions"] }}</h2>
            <span class="font-AmpleSoftBold text-xl rotate-90 transition-all duration-300">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>{{ $item["answer"] }}</p>
          </div>
        </div>
      @endif
      @endforeach
    </div>
    <div class="space-y-6">
      @foreach ($data as $key => $item)
      @if ($key % 3 === 2)
        <div class="border border-black m-1 px-2 py-4 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-AmpleSoftBold">{{ $item["questions"] }}</h2>
            <span class="font-AmpleSoftBold text-xl rotate-90 transition-all duration-300">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>{{ $item["answer"] }}</p>
          </div>
        </div>
      @endif
      @endforeach
    </div>


    {{-- <div>
      <div class="border border-black m-1 px-2 py-4 cursor-pointer">
        <div class="flex justify-between items-center space-x-4" id="card-faq">
          <h2 class="font-AmpleSoftBold">Bagaimana cara pembayaran iuran keanggotaan di Urban Athletes?</h2>
          <span class="font-AmpleSoftBold text-xl rotate-90">&#8711;</span>
        </div>
        <div id="card-detail" class="hidden">
          <div class="border-t border-neutral-700 my-2"></div>
          <p>Kami menerima pembayaran melalui auto debit dari debit dan kartu kredit. Pembayaran sekaligus di awal termin serta pembayaran di tempat juga tersedia melalui customer service  kami</p>
        </div>
      </div>
      <div class="border border-black m-1 px-2 py-4 cursor-pointer">
        <div class="flex justify-between items-center space-x-4" id="card-faq">
          <h2 class="font-AmpleSoftBold">Apakah ada biaya tambahan setelah saya bergabung dengan Urban Athletes?</h2>
          <span class="font-AmpleSoftBold text-xl rotate-90">&#8711;</span>
        </div>
        <div id="card-detail" class="hidden">
          <div class="border-t border-neutral-700 my-2"></div>
          <p>Tidak. Tapi apabila Anda ingin memaksimalkan latihan Anda dalam waktu singkat, kami merekomendasikan Anda program Pelatih Pribadi (Personal Training). Anda juga bisa memanfaatkan kelas-kelas fitness atau berbagai peralatan berstandar internasional yang tersedia di klub kami. Anda juga berhak menggunakan berbagai fasilitas seperti air minum dan loker serta ruang mandi dengan sabun dan shampoo gratis.</p>
        </div>
      </div>
      <div class="border border-black m-1 px-2 py-4 cursor-pointer">
        <div class="flex justify-between items-center space-x-4" id="card-faq">
          <h2 class="font-AmpleSoftBold">Kemana saya harus menyampaikan pertanyaan terkait keanggotaan saya?</h2>
          <span class="font-AmpleSoftBold text-xl rotate-90">&#8711;</span>
        </div>
        <div id="card-detail" class="hidden">
          <div class="border-t border-neutral-700 my-2"></div>
          <p>Kami akan dengan senang hati melayani pertanyaan dan masukkan Anda. Apabila Anda ingin berbicara langsung dengan management kami, silakan beritahu customer service di klub dan Anda akan segera disambungkan dengan Club Manager kami. Masing-masing Club Manager bertugas untuk memastikan Anda mendapatkan pelayanan terbaik. </p>
        </div>
      </div>
    </div>
    <div>
      <div class="border border-black m-1 px-2 py-4 cursor-pointer">
        <div class="flex justify-between items-center space-x-4" id="card-faq">
          <h2 class="font-AmpleSoftBold">Berapakah batas usia untuk bisa bergabung di Urban Athletes?</h2>
          <span class="font-AmpleSoftBold text-xl rotate-90">&#8711;</span>
        </div>
        <div id="card-detail" class="hidden">
          <div class="border-t border-neutral-700 my-2"></div>
          <p>Batas usia minimal untuk bergabung adalah 18 tahun ke atas dan kami akan memperkenankan usia di bawah 18 tahun apabila di bawah supervisi personal trainer. Seluruh kesepakatan kontrak dalam keanggotaan usia di bawah 18 tahun harus mendapat izin tertulis dari orang tua atau wali.</p>
        </div>
      </div>
      <div class="border border-black m-1 px-2 py-4 cursor-pointer">
        <div class="flex justify-between items-center space-x-4" id="card-faq">
          <h2 class="font-AmpleSoftBold">Apakah saya bisa berlatih di seluruh cabang Urban Athletes?</h2>
          <span class="font-AmpleSoftBold text-xl rotate-90">&#8711;</span>
        </div>
        <div id="card-detail" class="hidden">
          <div class="border-t border-neutral-700 my-2"></div>
          <p>Ya, Anda bisa mengakses semua cabang Urban Athletes selama anda memiliki tipe membership All Club.</p>
        </div>
      </div>
      <div class="border border-black m-1 px-2 py-4 cursor-pointer">
        <div class="flex justify-between items-center space-x-4" id="card-faq">
          <h2 class="font-AmpleSoftBold">Bagaimana cara memperbaharui informasi di keanggotaan saya?</h2>
          <span class="font-AmpleSoftBold text-xl rotate-90">&#8711;</span>
        </div>
        <div id="card-detail" class="hidden">
          <div class="border-t border-neutral-700 my-2"></div>
          <p>Customer Service kami akan dengan senang hati membantu Anda memperbaharui data-data pada keanggotaan Anda.</p>
        </div>
      </div>
    </div> --}}
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
  </script>
@endpush