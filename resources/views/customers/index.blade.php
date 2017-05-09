@extends('customers.layouts.master')
@section('content')
    <div id="content">
        <div class="content-shop left-sidebar">
            <div class="container">
                @if(session()->has('successmessage'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Success!</strong>{{ session()->get('successmessage') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                        <div class="main-content-shop">
                            <div class="banner-shop-slider">
                                <div class="wrap-item">
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href=""><img src="/assets/images/3412240.jpg" width="980"
                                                                height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href=""><img src="/assets/images/banner.jpg" width="980"
                                                                height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href=""><img src="/assets/images/banner1.jpg" width="980"
                                                                height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href=""><img src="/assets/images/banner2.png" width="980"
                                                                height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href=""><img src="/assets/images/banner4.jpg" width="980"
                                                                height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                </div>
                            </div>
                            <!-- End Banner Slider -->
                            <div class="list-shop-cat">
                                <ul>
                                    @foreach($catlatest5second as $key=>$cat5sec)
                                        <li>
                                            <a href="{!! url('category/'.$cat5sec->slug) !!}">{{$cat5sec->name}}
                                                <span>{{$count[$key]}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- End List Shop Cat -->
                            <div class="shop-tab-product">
                                <div class="shop-tab-title">
                                    <h2>Lets Look Around</h2>
                                </div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="product-grid">
                                        <ul class="row product-grid auto-clear">
                                            @foreach($allpro as $pros)
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="item/{{$pros->slug}}">
                                                                <img class="first-thumb" width="300" height="300"
                                                                     src="{{ asset($pros->image_url) }}">
                                                                <img class="second-thumb" alt="" src="{{ asset($pros->image_url) }}">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="{!! url('user/addtowishlist/'.$pros->id)!!}"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                    <a href="item/{{$pros->slug}}"><i
                                                                                class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="{!! url('user/orderform/'.$pros->id)!!}"><i
                                                                            class="fa fa-shopping-basket"></i> Order</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="item/{{$pros->slug}}">{{$pros->name}}</a></h3>
                                                            <div class="info-price">
                                                                <span>{{$pros->price}}Ks</span>
                                                            </div>
                                                            <!-- may be phase2 -->
                                                            <!-- <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="sort-pagi-bar">
                                                    {{$allpro->render()}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Sort Pagibar -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Shop Tab -->
                        </div>
                        <!-- End Main Content Shop -->
                    </div>
                    @include('customers.layouts.partial.sidebarcategory')
                </div>
            </div>
        </div>
        <!-- End Content Shop -->
    </div>
    <!-- End Content -->
@endsection