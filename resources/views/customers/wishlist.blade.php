@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="cart-content-page">
					<h2 class="title-shop-page">My WishList</h2>
					<form method="post">
						<div class="table-responsive">
							@if($count > 0)
								<table cellspacing="0" class="shop_table cart table">
									<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-name">Name</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Description</th>
									</tr>
									</thead>
									<tbody>
									@foreach($products as $items)
										<tr class="cart_item">
											<td class="product-thumbnail">
												<a href="#"><img src="{{ asset($items->purl) }}"  width="300" height="70"/></a>
											</td>
											<td class="product-name">
												<a href="#">{{$items->pname}}</a>
											</td>
											<td class="product-price">
												<span class="amount">{{$items->pprice}}</span>
											</td>
											<td class="product-quantity">
												<div>
													<p>{{$items->pdescr}}</p>
												</div>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="sort-pagi-bar">
											{{$products->render()}}
										</div>
									</div>
								</div>
							@else
							<h2>You Still don't add any items to your wish list</h2>
							@endif
						</div>
					</form>
				</div>
			</div>	
		</div>
		<!-- End Content Page -->
	</div>
	<!-- End Content -->
@endsection