@extends("layouts.app")

@section('content')
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
	    </div>
	@endif
	<a class="btn btn-primary" href="{{ URL('admin/products/create') }}">
		Add New
	</a>
	<ul>
	@foreach($products as $product)
		<li>
			{{ $product->name }}
		</li>

	@endforeach
	<ul>
@endsection