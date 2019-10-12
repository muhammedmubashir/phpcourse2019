@extends("layout")

@section("content")
	
	<div>
		<div style="clear: both;">
			<h2>{{ $heading }}</h2>
		</div>
		<div style="clear: both;">
			<p> {{ $productDetails->name }} </p>
			<p> {{ $productDetails->description }} </p>
			<p> ${{ $productDetails->regular_price }} </p>
			<p> 
				@if($productDetails->quantity > 0) 
				In Stock
				@endif
			</p>
			@foreach($productImages as $image)
			
			<img src="{{ URL ($image->image_path) }}/{{ $image->image_name}}">
			@endforeach
		</div>
	</div>

@endsection
