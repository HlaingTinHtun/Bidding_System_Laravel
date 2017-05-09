@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page">
			<div class="container">
				<h2 class="title-shop-page">Item Category</h2>
				@if(session()->has('successmessage'))
					<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Success!</strong>{{ session()->get('successmessage') }}
					</div>
				@endif
				<div class="list-super-deal">
					<div class="super-deal-content">
						<div class="row">
							@if($count > 0)
								@foreach($products as $pros)
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="item-deal-product">
											<div class="product-thumb">
												<a class="product-thumb-link" href="{!! url('item/'.$pros->slug) !!}">
													<img class="first-thumb" width="250" height="300" src="{{ asset($pros->image_url) }}">
													<img class="second-thumb" alt="" src="{{ asset($pros->image_url) }}">
												</a>
												<div class="product-info-cart">
													<div class="product-extra-link">
														<a class="wishlist-link" href="{!! url('user/addtowishlist/'.$pros->id)!!}"><i class="fa fa-heart-o"></i></a>
														<a class="quickview-link" href="{!! url('item/'.$pros->slug) !!}"><i class="fa fa-search"></i></a>
													</div>
													<a class="addcart-link" href="{!! url('user/orderform/'.$pros->id)!!}"><i class="fa fa-shopping-basket"></i> Order </a>
												</div>
											</div>
											<div class="product-info">
												<h3 class="title-product"><a href="#">{{$pros->name}}</a></h3>
												<p class="desc">{{$pros->descr}}</p>
												<div class="info-price-deal">
													<span>{{$pros->price}}</span>
												</div>
												<div class="deal-shop-social">
													<a href="{!! url('user/orderform/'.$pros->id)!!}" class="deal-shop-link">Shop Now</a>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							@else
								<h3>Currently The Items Of This Category Are Not In Stock</h3>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="sort-pagi-bar">
								{{$products->render()}}
							</div>
						</div>
					</div>
				</div>
				<!-- End Super Deal -->
			</div>
		</div>
		<!-- End Main Content Home -->
	</div>
	<!-- End Content -->
@endsection