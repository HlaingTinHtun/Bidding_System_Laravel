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
                            <span class="caption-subject font-blue-madison bold uppercase">Invoice Printing Section</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            <div class="col-md-10">
                                <p>CustomerID   : 00102</p>
                                <p>CustomerName : Jc Dagger</p>
                                <p>OrderDate : 22/02/2017</p>
                            </div>
                            <div class="col-md-2">
                                <p>VendorID   : 00124</p>
                                <p>InvoiceID   : 00132</p>
                            </div>
                            <table class="table table-hover table-light">
                                <thead>
                                <tr class="uppercase">
                                    <th> OrderId </th>
                                    <th> Productname </th>
                                    <th> Quantity </th>
                                    <th> Per Price </th>
                                    <th> Final Price </th>
                                </tr>
                                </thead>
                                <tr>
                                    <td> 0012 </td>
                                    <td> Shoe1 </td>
                                    <td> 1 </td>
                                    <td> 40000Ks </td>
                                    <td> 40000Ks </td>
                                </tr>
                                <tr>
                                    <td> 0013 </td>
                                    <td> Tshirt </td>
                                    <td> 2 </td>
                                    <td> 10000Ks </td>
                                    <td> 20000Ks </td>
                                </tr>
                                <tr>
                                    <td> 0014 </td>
                                    <td> Blouse </td>
                                    <td> 1 </td>
                                    <td> 21000Ks </td>
                                    <td> 21000Ks </td>
                                </tr>
                                <tr>
                                    <td> 0015 </td>
                                    <td> Bike </td>
                                    <td> 2 </td>
                                    <td> 14000Ks </td>
                                    <td> 28000Ks </td>
                                </tr>
                                <tr>
                                    <td> 0012 </td>
                                    <td> HatNike </td>
                                    <td> 1 </td>
                                    <td> 20400Ks </td>
                                    <td> 20400Ks </td>
                                </tr>

                                <tr>
                                    <td colspan="4" align="right"><b style="margin-right: -70px;">Total: 129400Ks</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
    </div>
@endsection