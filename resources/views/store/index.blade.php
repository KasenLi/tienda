@extends('store.main')

@section('content')

<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->name }}</h3><hr>
				<img src="{{ asset($product->image) }}" width="200" style="height: 250px;">
				<div class="product-info panel">
					<p>{{ $product->extract }}</p>
					<h3><span class="badge badge-success">Precio: ${{number_format($product->price,2)}}</span></h3>
					<p>
						<a class="btn btn-warning" href="{{ route('cart-add', $product->slug)}}"><i class="fa fa-cart-plus"></i> La quiero</a>
						<a class="btn btn-info" href="{{ route('product-detail', $product->slug)}}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>
					</p>
				</div>
			</div>

		@endforeach
	</div>
</div>
@endsection