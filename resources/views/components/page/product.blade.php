<div>
  @if($products)
    @foreach ($products as $row)
      <h1>{{ $row->label }}</h1>
    @endforeach
  @endif
</div>