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
                            <span class="caption-subject font-blue-madison bold uppercase">Credit Memo</span>
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
                                    <th> Credit memo id</th>
                                    <th> Created date</th>
                                    <th> Order id </th>
                                    <th> Order Date</th>
                                    <th> Buyer Name</th>
                                    <th> Status</th>
                                    <th> Refunded Person</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td> 00124</td>
                                    <td> Feb.10.2017</td>
                                    <td> 00334</td>
                                    <td> Feb.20.2017 </td>
                                    <td> Jolly </td>
                                    <td> Left </td>
                                    <td> Nick </td>
                                </tr>
                                <tr>
                                    <td> 00125</td>
                                    <td> Feb.10.2017</td>
                                    <td> 00324</td>
                                    <td> Feb.20.2017 </td>
                                    <td> Jone </td>
                                    <td> Paid </td>
                                    <td> Nick </td>
                                </tr>
                                <tr>
                                    <td> 00126</td>
                                    <td> Feb.10.2017</td>
                                    <td> 00332</td>
                                    <td> Feb.20.2017 </td>
                                    <td> Jc </td>
                                    <td> Left </td>
                                    <td> Bruice </td>
                                </tr>
                                <tr>
                                    <td> 00127</td>
                                    <td> Feb.10.2017</td>
                                    <td> 00224</td>
                                    <td> Feb.20.2017 </td>
                                    <td> Anie </td>
                                    <td> Paid </td>
                                    <td> Ember </td>
                                </tr>
                                <tr>
                                    <td> 00128</td>
                                    <td> Feb.10.2017</td>
                                    <td> 00334</td>
                                    <td> Feb.20.2017 </td>
                                    <td> Amy </td>
                                    <td> Left </td>
                                    <td> Kyaw </td>
                                </tr>
                                <tr>
                                    <td> 00129</td>
                                    <td> Feb.10.2017</td>
                                    <td> 00334</td>
                                    <td> Feb.20.2017 </td>
                                    <td> Bric </td>
                                    <td> Paid </td>
                                    <td> Amber </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="search-pagination" style="float: right;">
                                <ul class="pagination">
                                    <li class="page-active">
                                        <a href="javascript:;"> 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 2 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 3 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 4 </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET -->


            </div>
        </div>
    </div>
    <div id="gmap_polygons"></div>
    </div>
@endsection