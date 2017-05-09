@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
						<h2 class="title-shop-page">Order Form</h2>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @if(session()->has('successmessage'))
                            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Success!</strong>{{ session()->get('successmessage') }}
                            </div>
                        @endif
                        <form class="form-my-account" method="post" action="{!! url('user/postorder/'.$product->id)!!}">{{ csrf_field() }}
                            <div class="row" style="width: 1020px;">
                                <div class="col-md-6">
                                    <p><input type="text" name="address" placeholder="Detail Address *" value="{{old('address')}}" /></p>
                                    <p><input type="text" name="township" placeholder="TownShip *" value="{{old('township')}}"/></p>
                                    <p>
                                        <textarea cols="30" name="ordernote" placeholder="Order Notes" value="{{old('ordernote')}}" rows="10"></textarea>
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $count = 1?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{$product->name}}&nbsp; <span class="product-quantity">× {{$count}}</span>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">{{$product->price}} Ks</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <input type="submit" class="btnorder" data-value="Place order" value="Place order" style="padding-left: 18px;">

                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
		<!-- End Content Page -->
	</div>
	<!-- End Content -->
@endsection