@extends("layout")

@section("content")
	<h2>{{ $heading }}</h2>
	<ul>
		@foreach($productList as $product)
			<li> {{ $product }}</li>
		@endforeach
	</ul>

	<p>Laravel Blade Template engine </p>
@endsection