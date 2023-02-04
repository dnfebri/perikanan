<x-layouts-main>
  <x-slot name="header">
    <x-page.header/>
  </x-slot>
  <x-page.faq-section :faq="$data" :auth=false />
</x-layouts-main>