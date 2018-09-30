@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> {{trans('app.order_detail')}}</h1>
		</div><hr>

		<div class="page">
			<div class="table-responsive">
				<h3>{{trans('app.user_detail')}}</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td class="table-warning">{{trans('app.name')}}:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td class="table-warning">{{trans('app.username')}}:</td><td>{{ Auth::user()->username }}</td></tr>
					<tr><td class="table-warning">{{trans('app.email')}}:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td class="table-warning">{{trans('app.address')}}:</td><td>{{ Auth::user()->address }}</td></tr>

				</table>
			</div>
			<div class="table-responsive">
				<h3>{{trans('app.order_info')}}</h3>
				<table class="table table-striped table-hover">
					<thead>
						<tr class="table-info">
							<th>{{trans('app.product')}}</th>
							<th>{{trans('app.price')}}</th>
							<th>{{trans('app.quantity')}}</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					@foreach($cart as $item)
					<tbody class="table-primary">
						<tr>
							<td>{{ $item->name}}</td>
							<td>{{ number_format($item->price, 2)}}</td>
							<td>{{ $item->quantity}}</td>
							<td>{{ number_format($item->price * $item->quantity, 2)}}</td>
						</tr>
					</tbody>
					@endforeach
				</table><hr>
				<h3>
					<span class="badge badge-success">
						Total: ${{number_format($total,2)}}
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show')}}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> {{trans('app.return')}}
					</a>

					<a href="{{ route('payment')}}" class="btn btn-warning">
						{{trans('app.pay_with')}} <i class="fa fa-paypal fa-2x"></i>
					</a>
				</p>
			</div>
		</div>
	</div>
@stop