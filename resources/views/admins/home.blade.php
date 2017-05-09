@extends('admins.layouts.master')
@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <div class="row widget-row">
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Today Balance</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-green icon-bulb"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">Ks</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="711,644">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Weekly Sales</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-red icon-layers"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">Ks</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,412,293">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Biggest Purchase</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">Ks</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="340,815">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Average Monthly</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">Ks</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,512,071">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Products Vendor Post Today</span>
                            </div>
                            <!-- Date filter -->
                            <!-- <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                </div>
                            </div> -->
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">
                                        <th colspan="2"> Vendor </th>
                                        <th> Productname </th>
                                        <th> Price </th>
                                        <th> Uploaded Date </th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar4.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Vendor1</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar5.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Vendor2</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar6.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Vendor3</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar7.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Vendor4</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET -->
                </div>
                <div class="col-md-12">
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">All Orders</span>
                            </div>
                            <!-- Date filter -->
                            <!-- <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                </div>
                            </div> -->
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">
                                        <th colspan="2"> MEMBER </th>
                                        <th> Productname </th>
                                        <th> ProductOwner (Vendor) </th>
                                        <th> Price </th>
                                        <th> Order Date </th>
                                        <th> Status </th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar4.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Brain</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> Vendor1 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                        <td> Delivered </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar5.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Nick</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> Vendor2 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                        <td> Cancel </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar6.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Tim</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> Vendor3 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                        <td> Pending </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar7.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Tom</a>
                                        </td>
                                        <td> Testing123 </td>
                                        <td> Vendor4 </td>
                                        <td> $345 </td>
                                        <td> Feb.10.2017 </td>
                                        <td> Delivered </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>

@endsection