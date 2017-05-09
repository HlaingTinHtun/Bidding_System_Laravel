<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Grid</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/font-linearicons.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.transitions.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.theme.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/js/slideshow/settings.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/theme.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/style.css" media="all"/>
</head>
<body>
<div class="wrap">
    <div id="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <ul class="top-menu">
                            <li><a href="{!! url('about') !!}">About</a></li>
                            <li><a href="{!! url('contact') !!}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <ul class="top-info">
                            @if (Auth::check())
                                <li class="top-account has-child">

                                    <a href="{{ url('user/myaccount') }}">My Account</a>
                                    <ul class="sub-menu-top">
                                        <li><a href="{{ url('user/myaccount') }}"><i class="fa fa-user"></i> Account Info</a></li>
                                        <li><a href="{{ url('user/logout') }}"><i class="fa fa-sign-in"></i> LogOut</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="top-help ">
                                    <a href="{{ url('user/login') }}">Log In | Register</a>
                                </li>
                            @endif

                            <li class="top-help has-child">
                                <a href="itemcategory">Help</a>
                                <ul class="sub-menu-top">
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Submit A Complaint</a></li>
                                </ul>
                            </li><!--
        <li class="top-mobile"><a href="itemcategory">Mobile </a></li> -->
                            <li class="top-language has-child">
                                <a href="#" class="language-selected"><img src="/assets/images/home1/flag-default.jpg" alt=""/>English </a>
                                <ul class="sub-menu-top">
                                    <li><a href="#"><img src="/assets/images/home1/flag-england.jpg" alt=""/>English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header -->
        <div class="header">
            <div class="container">
                <div class="header-main">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="logo">
                                <a href="{!! url('home') !!}"><img src="/assets/images/im0.jpg" style="width:120px" alt=""/></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="smart-search">
                                <div class="select-category">
                                    <p style="margin-left: 35px;margin-top: 8px;">Search Products</p>
                                </div>
                                <form class="smart-search-form">
                                    <input type="text" value="Search Bar Will Be Included in Phase2"
                                           onfocus="if (this.value==this.defaultValue) this.value = ''"
                                           onblur="if (this.value=='') this.value = this.defaultValue"/>
                                    <input type="submit" value=""/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 hidden-xs">
                            <div class="mini-cart">
                                <a href="{!! url('user/wishlist') !!}" class="logout">
                                    <span><i class="fa fa-heart-o"></i> WishList</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm">
                            <div class="category-dropdown hidden-category-dropdown">
                                <h2 class="title-category-dropdown"><span>Categories</span></h2>
                                <div class="wrap-category-dropdown">
                                    <ul class="list-category-dropdown">
                                        @foreach($categories as $key=>$cats)
                                            <li class="has-cat-mega">
                                                <a href="{!! url('category/'.$cats->slug) !!}">{{$cats->name}}</a>
                                                <img src="{{$image[$key]}}" alt=""/>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- End Category Dropdown -->
                        </div>
                        <div class="col-md-9">
                            <nav class="main-nav">
                                <ul>
                                    @foreach($catlatest5 as $catlat5)
                                        <li>
                                            <a href="{!! url('category/'.$catlat5->slug) !!}">{{$catlat5->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                            <!-- End Main Nav -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->
    </div>
    <!-- End Header -->

    @yield('content')

    <div id="footer">
        <div class="footer">
            <div class="container">
                <div class="list-footer-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-box">
                                <h2>Help</h2>
                                <ul class="footer-menu-box">
                                    <li><a href="#">Help1</a></li>
                                    <li><a href="#">Help2</a></li>
                                    <li><a href="#">Help3</a></li>
                                    <li><a href="#">Help4</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-box">
                                <h2>Further information</h2>
                                <ul class="footer-menu-box">
                                    <li><a href="#">Drop Everything</a></li>
                                    <li><a href="#">Affiliate programme</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms & conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-box">
                                <h2>Contact Us</h2>
                                <ul class="footer-box-contact">
                                    <li><i class="fa fa-home"></i> Our business address is 1063 Free</li>
                                    <li><i class="fa fa-mobile"></i> + 95 12344566</li>
                                    <li><i class="fa fa-envelope"></i> <a href="#">support@7-Up.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="list-tags-category">
                    <div class="item-tags-category">
                        @foreach($footcat as $key=>$footcats)
                            <div class="col-md-2">
                                <a href="{!! url('category/'.$footcats->slug) !!}"> <h2><span style="{{$color[$key]}}text-align: center;">{{$footcats->name}}</span></h2></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- End List Tags Category -->
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>BLur BLur BLur Demo Store. All Rights Reserved. Powered by <a
                                            href="#">testing.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="payment-method">
                                <a href="#"><img src="/assets/images/logobanner.jpg" width="300"
                                                            height="30"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer Bottom -->
            </div>
        </div>
    </div>
    <!-- End Footer -->
</div>
<script type="text/javascript" src="/assets/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="/assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="/assets/js/slideshow/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="/assets/js/slideshow/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.jcarousellite.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="/assets/js/theme.js"></script>
</body>
</html>