<h1 class="page-title"> User Profile
    <small></small>
</h1>
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{ !empty(Auth::guard('dealer')->user()->image_url) ? asset(Auth::guard('dealer')->user()->image_url) : '/assets/images/dealerimg.png' }}" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {{ Auth::guard('dealer')->user()->name }} </div>
                    <div class="profile-usertitle-job"> Vendor-ID 00{{  Auth::guard('dealer')->user()->id }}</div></br>
                </div>
                <!-- END SIDEBAR BUTTONS -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <!-- <div class="portlet light ">
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> Projects </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> Tasks </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> Uploads </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="profile-desc-title">About Marcus Doe</h4>
                                        <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-twitter"></i>
                                            <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-facebook"></i>
                                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                        </div>
                                    </div>
                                </div> -->
            <!-- END PORTLET MAIN -->
        </div>