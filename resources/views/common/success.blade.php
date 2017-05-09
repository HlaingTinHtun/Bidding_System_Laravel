@if(session()->has('success'))
    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
        <strong> Successfully !</strong> {{ session()->get('success') }}
    </div>
@endif