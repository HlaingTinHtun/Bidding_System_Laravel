@extends('vendors.layouts.master')
@section('content')
    @include('vendors.layouts.partials.usersidebar')
    <div class="profile-content">
        <div class="row widget-row">
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Today Balance</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-green icon-bulb"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">Ks</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,644">0</span>
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
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="12,293">0</span>
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
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="4,815">0</span>
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
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="52,071">0</span>
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
                            <span class="caption-subject font-blue-madison bold uppercase">All Orders</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            @if($ordercount > 0)
                                <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">
                                        <th colspan="2"> Buyer </th>
                                        <th> Product </th>
                                        <th> Total Price </th>
                                        <th> Buy Date </th>
                                        <th> Status </th>
                                    </tr>
                                    </thead>

                                    @foreach ($orderItems as $orderItem)
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic" src="
                                                                /assets/pages/media/users/avatar4.jpg"> </td>
                                            <td>
                                                <a href="javascript:;" class="primary-link">{{ $orderItem->user->name}}</a>
                                            </td>
                                            <td> {{ $orderItem->product->name }} </td>
                                            <td> {{ $orderItem->price }} </td>
                                            <td> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $orderItem->order_date)->format('l jS \\of F Y') }}</td>
                                            <td> {{ 'Delivered' }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <h3>We Will Notify You In Here When Customer Bought Your Products</h3>
                            @endif
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
                            <span class="caption-subject font-blue-madison bold uppercase">Your Uploaded Products</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            @if($productcount)
                                <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">
                                          <th colspan="2"> Product </th>
                                        <th> Category </th>
                                        <th> Description </th>
                                        <th> Price </th>
                                        <th> Qty </th>
                                        <th> Uploaded Date </th>
                                    </tr>
                                    </thead>
                                     @foreach ($products as $product)
                                       <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="{{ url($product->image_url) }}"> </td>

                                        <td>
                                        <a href="javascript:;" class="primary-link">{{ $product->name }} </a>
                                        </td>
                                            <td> {{ $product->category->name }} </td>
                                            <td> {{ substr($product->descr, 0, 70) }}... </td>
                                            <td> {{ $product->price }} </td>
                                            <td> {{ $product->quantity }} </td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->created_at )->format('l jS \\of F Y h:i:s A') }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <h3>You Don't Have Any Uploaded Items Yet!</h3>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- END PORTLET -->
            </div>
        </div>
        <div id="gmap_polygons"></div>
    </div>
@endsection