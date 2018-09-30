@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> {{trans('app.product_detail')}}</h1>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ asset($product->image) }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name}}</h3><hr>
				<div class="product-info panel">
					<p>{{$product->description}}</p>
					<h3><span class="badge badge-success">{{trans('app.price')}}: ${{ number_format($product->price,2) }}</span></h3>
					<p>
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug)}}">
							{{trans('app.want_it')}} <i class="fa fa-cart-plus"></i>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div><hr>
	<p>
		<a class="btn btn-info" href="{{ route('home')}}">
			<i class="fa fa-chevron-circle-left"></i> {{trans('app.return')}}
		</a>
	</p>
</div>
@endsection