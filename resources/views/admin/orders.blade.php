@extends('layouts.app')
@section('content')

@section('content')

	<div class="col-md-10 mx-auto">
		<div class="card">
			<div class="card-header">
				<p>Order Summary</p>
			</div>
			<div class="card-body">
				<div class="row">
					<table class="table table-bordered mx-4 my-3">
						<thead>
							<tr>
								<th>Id</th>
								<th>Product Name</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Amount</th>
								<th>Quantité</th>
								<th>Address Livrison</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($orders as $order)
							<tr>
								<td>{{ $order->id }}</td>
								<td>{{ $order->product_name }}</td>
								<td>{{ $order->user_name }}</td>
								<td>{{ $order->email }}</td>
								<td>{{ $order->amount }}</td>
								<td>{{ $order->qty }}</td>
								<td>{{ $order->address }}</td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 mx-auto mt-4">
				<a href="/dashboard" class="btn btn-primary btn-lg btn-block">Dashboard</a>
			</div>
		</div>
	</div>	

@endsection