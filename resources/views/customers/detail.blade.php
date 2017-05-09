@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-shop left-sidebar">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12 main-content">
						<div class="main-content-shop">
								<div class="main-detail">
									@if(session()->has('successmessage'))
										<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Success!</strong>{{ session()->get('successmessage') }}
										</div>
									@endif
									<div class="row">
										<div class="col-md-5 col-sm-12 col-xs-12">
											<div class="detail-gallery">
												<div class="mid">
													<img src="{{ asset($productdetail->image_url) }}" width="350" height="450"/>
												</div>
											</div>
											<!-- End Gallery -->
										</div>
										<div class="col-md-7 col-sm-12 col-xs-12">
											<div class="detail-info">
												<h2 class="title-detail">{{$productdetail->name}}</h2>
												<div class="product-code">
													<label>Description : </label> <span>{{$productdetail->descr}}</span>
												</div>
												<div class="product-stock">
													<label>Quantity Left : </label> <span>{{$productdetail->quantity}}</span>
												</div>
												<div class="info-price info-price-detail">
													<label>Price:</label> <span>{{$productdetail->price}}Ks</span>
												</div>
												<div class="attr-info">
													<a class="addcart-link" href="{!! url('user/orderform/'.$productdetail->id)!!}"><i class="fa fa-shopping-cart"></i> Order</a>
													<a class="addcart-link" href="{!! url('user/addtowishlist/'.$productdetail->id)!!}"><i class="fa fa-heart-o"></i> Add To WishList</a>

												</div>
												<!-- End Attr Info -->
											</div>
											<!-- Detail Info -->
										</div>
									</div>
								</div>
								<!-- End Main Detail -->
								<div class="tab-detail">
									<div class="title-tab-detail">
										<ul role="tablist">
											<li class="active"><a href="#" data-toggle="tab">Product Details </a></li>
										</ul>
									</div>
									<div class="content-tab-detail">
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="details">
												<div class="table-content-tab-detail">
													<div class="title-table-detail"><span>Return Policy</span></div>
													<div class="icon-table-detail"><img src="/assets/images/grid/rv1.png" alt="" /></div>
													<div class="info-table-detail">
														<p>If the product you receive is not as described or low quality, the seller promises that you may return it before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe) and receive a full refund. The return shipping fee will be paid by you. Or, you can choose to keep the product and agree the refund amount directly with the seller.</p>
													</div>
												</div>
												<div class="table-content-tab-detail">
													<div class="title-table-detail"><span>Seller Service</span></div>
													<div class="icon-table-detail"><img src="/assets/images/grid/rv2.png" alt="" /></div>
													<div class="info-table-detail">
														<h3>On-time Delivery</h3>
														<p>If you do not receive your purchase within 60 days, you can ask for a full refund before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe).</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						<!-- End Main Content Shop -->
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
						<div class="sidebar-shop sidebar-left">
							<div class="widget widget-related-product">
								<h2 class="widget-title">RELATED PRODUCTS</h2>
								<ul class="list-product-related">
									@foreach($relatedpros as $repros)
										<li class="clearfix">
											<div class="product-related-thumb">
												<a href="{!! url('item/'.$repros->slug) !!}"><img src="{{ asset($repros->image_url) }}" alt="" /></a>
											</div>
											<div class="product-related-info">
												<h3 class="title-product"><a href="#">{{$repros->name}}</a></h3>
												<div class="info-price">
													<span>{{$repros->price}}</span>
												</div>
											</div>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
										{{$relatedpros->render()}}
								</div>
							</div>
							<!-- End Related Product -->
						</div>
						<!-- End Sidebar Shop -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Shop -->
	</div>
	<!-- End Content -->
@endsection