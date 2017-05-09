@extends('vendors.layouts.master')
@section('content')
    @include('vendors.layouts.partials.usersidebar')
    <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" enctype="multipart/form-data" method="POST">
                        {{ csrf_field()}}
                        @include('common.errors')
                        @include('common.success')
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="name" placeholder="John" class="form-control" value="{{ old('name',$user->name)}}" /> </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" name="email" placeholder="testing@gmail.com" class="form-control"  value="{{ old('email',$user->email)}}" /> </div>
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="company" placeholder="Enter your company" class="form-control" value="{{ old('company', $user->company)}}" /> </div>
                         <div class="form-group">
                            <label class="control-label">City / State</label>
                            <input type="text" name="city" placeholder="Enter your region" class="form-control" value="{{ old('city', $user->city)}}" /> </div>
                         <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" name="address" placeholder="Enter your Address" class="form-control" value="{{ old('address', $user->address)}}" /> </div>    
                        
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" name="image_url" placeholder=""  /> </div>
                        <div class="margiv-top-10">
                        <button type="submit" class="btn green">Save info</button>
                            <a href="home" class="btn default"> Cancel </a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection