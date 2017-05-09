@extends('customers.layouts.master')
@section('content')
    <div id="content">
        <div class="content-page">
            <div class="container">
                <h2 class="title-shop-page">User Info</h2>
                <div class="list-super-deal">
                    <h3>Name : {{ $user->name }} </h3>
                    <h3>Email : {{ $user->email }}</h3> 
                </div>
                <hr>
                <!-- End Super Deal -->
            </div>
        </div>
        <!-- End Main Content Home -->
    </div>
@endsection