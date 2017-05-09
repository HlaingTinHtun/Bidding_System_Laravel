@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
						<h2 class="title-shop-page">My Account</h2>
						@include('common.errors')
						<div class="row">
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="account-login">
									<form class="form-my-account" method="POST" action="{{ url('login')}}">
										{{ csrf_field()}}
										<h2 class="title">Login</h2>
										<p><input type="text" name="email" value="Email *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p><input type="password" name="password" placeholder="Password *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										{{--<p>
											<input type="checkbox"  id="remember" /> <label for="remember">Remember me</label>
											<a href="#">Lost Password?</a>
										</p>--}}
										<p><input type="submit" value="Login" /></p>
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="account-register">
									<form class="form-my-account" method="POST" action="{{ url('register')}}">
										{{ csrf_field()}}
										<h2 class="title">Register</h2>
									
										<p><input type="text" placeholder="Name *" name="name" value="{{old('name')}}" /></p>

										<p><input type="text" placeholder="Email *" name="email" value="{{old('email')}}"/></p>
									
										<p><input type="password" name="password" placeholder="Password *" /></p>

										<p><input type="password" name="password_confirmation" placeholder="Password Confirmation *" /></p>
										

										<p><input type="submit" value="Register" /><a href="{{ url('dealer/register')}}" style="margin-top: 18px;">Register Account As A Dealer</a>
										</p>
										{{--<script type="text/javascript">--}}

											{{--var customFieldIndex = 0;--}}

											{{--function addCustomField() {--}}
												{{--var $ = jQuery;--}}
												{{--customFieldIndex++;--}}
												{{--var html = '\--}}
											{{--<div id="id-custom-field-' + customFieldIndex + '" class="form-group" style="padding-bottom: 30px;">\--}}
													{{--<p><input type="text" name="companyname" placeholder="Name *" </p>\--}}
													{{--<p><input type="text" name="companydesc" placeholder="Info *" /></p>\--}}
												  {{--<div class="col-md-7">\--}}
													{{--<a href="#" class="submit" onClick="removeCustomField(' + customFieldIndex + '); return false;"><i class="entypo-trash"></i> Remove</a>\--}}
												  {{--</div>\--}}
											{{--</div>';--}}
												{{--$("#id-custom-fields").append(html);--}}
											{{--}--}}
											{{--function removeCustomField(i) {--}}
												{{--var $ = jQuery;--}}
												{{--var cf = $("#id-custom-field-" + i);--}}
												{{--if (cf != undefined) {--}}
													{{--cf.remove();--}}
												{{--}--}}
											{{--}--}}
										{{--</script>--}}
									</form></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Page -->
	</div>
	<!-- End Content -->
@endsection