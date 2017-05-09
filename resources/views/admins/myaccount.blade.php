@extends('admins.layouts.master')
@section('content')
        <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->


        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" action="#">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" placeholder="John" class="form-control" /> </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" placeholder="testing@gmail.com" class="form-control" /> </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="text" placeholder="*****" class="form-control" /> </div>
                        <div class="margiv-top-10">
                            <a href="javascript:;" class="btn green"> Update Changes </a>
                            <a href="home" class="btn default"> Cancel </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END CONTENT BODY -->
</div>

@endsection