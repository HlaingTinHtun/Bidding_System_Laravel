@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="about-banner zoom-image-thumb">
					<a href="#"><img src="/assets/images/aboutus1.jpg" alt="" /></a>
				</div>
				<ul class="about-menu">
					<li><a href="#">Introduction </a></li>
					<li><a href="#">Protection</a></li>
					<li><a href="#"> Customer Reviews</a></li>
				</ul>
				<div class="contact-info-page about-info-page">
					<div class="list-contact-info">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-quality" href="#"><i class="fa fa-diamond"></i></a>
									<h2><a href="#">100% Product quality protection</a></h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-shipment" href="#"><i class="fa fa-clock-o"></i></a>
									<h2><a href="#">100% On-time shipment protection</a></h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info last-item">
									<a class="contact-icon icon-payment" href="#"><i class="fa fa-usd"></i></a>
									<h2><a href="#">100% Payment protection</a></h2>
								</div>
							</div>
						</div>
					</div>
					<p class="desc">If the supplier fails to ship your products on time or the product quality does not meet the standards set in your contract, Aloshop will refund the covered amount of your payment.</p>
				</div>
				<div class="protect-video">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="about-full-protec">
								<h2 class="title-default">To get full protection</h2>
								<ul>
									<li><span>1</span> <p>CONFIRM your order online with a Trade Assurance supplier</p></li>
									<li><span>2</span> <p>PAY to the supplier’s CITIBANK account designated by Aloshop with credit card or bank transfer</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="video-about">
								<a href="#"><img src="/assets/images/aboutlogos.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
				{{--Customer Review--}}
				{{--<div class="about-review">
					<h2 class="title-default">Customer Reviews</h2>
					<div class="list-about-review">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review">
									<div class="about-review-thumb">
										<a href="#"><img src="/assets/images/pages/cus1.jpg" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a href="#">Stenve Johnson </a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review">
									<div class="about-review-thumb">
										<a href="#"><img src="/assets/images/pages/cus2.jpg" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a href="#">Madison Knight</a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review">
									<div class="about-review-thumb">
										<a href="#"><img src="/assets/images/pages/cus3.jpg" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a href="#">Charlie McGlynn</a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review last-item">
									<div class="about-review-thumb">
										<a href="#"><img src="/assets/images/pages/cus4.jpg" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a href="#">Alina Rouch</a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>--}}
			</div>
		</div>
	</div>
	<!-- End Content -->
@endsection