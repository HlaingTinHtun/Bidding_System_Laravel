@extends('customers.layouts.master')
@section('content')
	<script>
		(function(){
			var pusher = new Pusher('02c5b12fd179bf67953d', {
				encrypted: true
			});

			var channel = pusher.subscribe('test');

			channel.bind('App\\Events\\UserHasRegistered', function(data) {
				if(window.location.href == data.route){
					swal({title: "Hay", text: data.name+' Has Placed Bid ($ '+data.bidAmount+')'},
							function(){
								window.location.reload(true);
							}
					);
				}else{
					//Do Nth
				}
			});
		})();
	</script>
	<div id="content">
		<div class="content-shop left-sidebar">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12 main-content">
						<div class="main-content-shop">
								<div class="main-detail">
									@if(session()->has('bidsuccess'))
										<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Success ! </strong>{{ session()->get('bidsuccess') }}
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
											@if(session()->has('fake_error'))
												<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>
													<strong>Opps ! </strong>{{ session()->get('fake_error') }}
												</div>
											@endif
											@if(session()->has('successmessage'))
												<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>
													<strong>Opps ! </strong>{{ session()->get('successmessage') }}
												</div>
											@endif
											<div class="detail-info">
												@if (empty($expiredDate))
													{{--{{'available'}}--}}
													<div class="info-price info-price-detail">
														<h2>Product Will Be Expired In</h2><span id="countdown"></span>
													</div><br>
												@else
													{{--{{'Sold Out'}}--}}
													<div class="info-price info-price-detail">
														<span id="countdown"></span>
													</div><br>
												@endif

												<h2 class="title-detail">{{$productdetail->name}}</h2>
												<div class="product-code">
													<label>Description : </label> <span>{{$productdetail->descr}}</span>
												</div>
												<div class="product-stock">
													<label>Quantity Left : </label> <span>{{$productdetail->quantity}}</span>
												</div>
												@if (empty($expiredDate))
													{{--{{'available'}}--}}
														<div class="info-price info-price-detail">
															<label>Price:</label> <span>{{$productdetail->initialprice}}Ks</span><br>
															<label>The Latest Bidder is "{{$bidder}}"</label>
														</div>
												@else
													{{--{{'Sold Out'}}--}}
														<div class="info-price info-price-detail">
															<label>Price:</label> <span>{{$productdetail->initialprice}}Ks</span><br>
															<h3>The Winner is "{{$bidder}}"</h3>
														</div>
												@endif

												<div class="attr-info">
													<a class="addcart-link" href="{!! url('user/orderform/'.$productdetail->id)!!}"><i class="fa fa-shopping-cart"></i> Order</a>
													<a class="addcart-link" href="{!! url('user/addtowishlist/'.$productdetail->id)!!}"><i class="fa fa-heart-o"></i> Add To WishList</a>
												</div><br>
												@if(session()->has('failmessage'))
													<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>
														<strong>Opps ! </strong>{{ session()->get('failmessage') }}
													</div>
												@endif
												@if (count($errors) > 0)
													<div class="alert alert-danger">
														<ul>
															@foreach ($errors->all() as $error)
																<li>{{ $error }}</li>
															@endforeach
														</ul>
													</div>
												@endif
												<form class="form" method="post" action="{!! url('user/postbid/'.$productdetail->id)!!}">
													{{ csrf_field() }}
													<p>Your BID must be higher than the current amount</p>
													<p><input type="text" name="bidamount" placeholder="Add The Bid"/></p>
													<p><input type="hidden" name="route" value="{{Request::url()}}"></p>
													<a href="{!! url('user/postbid/'.$productdetail->id)!!}"><Button>BID</Button></a>
												</form>
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
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date('<?php echo $productdetail->end_date; ?>').getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get todays date and time
			var now = new Date().getTime();

			// Find the distance between now an the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Output the result in an element with id="demo"
			document.getElementById("countdown").innerHTML = days + "D " + hours + "H "
					+ minutes + "M " + seconds + "s ";

			// If the count down is over, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("countdown").innerHTML = "Product Has Been Sold Out";
			}
		}, 1000);
	</script>
@endsection