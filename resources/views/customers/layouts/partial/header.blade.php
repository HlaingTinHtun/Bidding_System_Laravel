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
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
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
                                  <a href="user/login">Log In | Register</a>
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
                                <a href="home"><img src="/assets/images/im0.jpg" style="width:120px" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="smart-search">
                                <div class="select-category">
                                    <p style="margin-left: 35px;margin-top: 8px;">Search Products</p>
                                </div>
                                <form class="smart-search-form">
                                    <input type="text" value="Search Bar Will Be Included in Phase2" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
                                    <input type="submit" value="" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 hidden-xs">
                            <div class="mini-cart">
                                <a href="wishlist" class="logout">
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
                                                    <a href="itemcategory">{{$cats->name}}</a>
                                                    <img src="{{$image[$key]}}" alt="" />
                                                </li>
                                        @endforeach
                                        {{--<li class="has-cat-mega">

                                        </li>
                                        <li  class="has-cat-mega">
                                            <a href="itemcategory">Computers</a>
                                            <img src="/assets/images/home1/cat2.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Electronics</a>
                                            <img src="/assets/images/home1/cat3.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Fashion</a>
                                            <img src="/assets/images/home1/cat4.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Footwear</a>
                                            <img src="/assets/images/home1/cat5.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Jewelry & Watches</a>
                                            <img src="/assets/images/home1/cat6.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Home Appliances</a>
                                            <img src="/assets/images/home1/cat8.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Beauty & Perfumes</a>
                                            <img src="/assets/images/home1/cat9.png" alt="" />
                                        </li>
                                        <li>
                                            <a href="itemcategory">Sports & Outdoors</a>
                                            <img src="/assets/images/home1/cat10.png" alt="" />
                                        </li>--}}
                                    <!-- <a href="itemcategory" class="expand-category-link"></a> -->
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
                                            <a href="itemcategory">{{$catlat5->name}}</a>
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