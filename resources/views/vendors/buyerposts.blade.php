@extends('vendors.layouts.master')
@section('content')
    <div class="profile-content">
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
                                        <th> Order Date </th>
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
                                            <td>
                                                <a href="{!! url('dealer/invoice/')!!}" class="primary-link">{{ 'View Invoice'}}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <h3>We Will Notify You In Here When Customer Bought Your Products</h3>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="search-pagination" style="float: right;">
                               {{ $orderItems->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
    </div>
    <div id="gmap_polygons"></div>
</div>
@endsection