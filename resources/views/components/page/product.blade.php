<div>
  @if($products)
    @foreach ($products as $row)
      <a href="{{ url('admin/product/' . $row['slug']) }}">
        <div class="w-[18rem] h-[28rem] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden">
          <img src="{{ url('images/' . $row['thumbnail']) }}" alt="{{ $row['name'] }}" class="w-full h-full object-cover object-center">
        </div>
      </a>
    @endforeach
  @endif
</div>