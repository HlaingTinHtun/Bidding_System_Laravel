@extends('vendors.layouts.master')
@section('content')
<style type="text/css">
    .bootstrap-tagsinput {
    width: 100%;
}
</style>
    @include('common.errors')
    @include('common.success')
    <div class="portlet-body">
        <div class="row tab-content">

            <!-- PERSONAL INFO TAB -->
            <div class="col-md-6 tab-pane active" id="tab_1_1">
                <h2>Upload your products to sell</h2>
                <form id="newitem" role="form" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label class="control-label">Product Name</label>
                        <input type="text" placeholder="Enter Product Name" name="name" class="form-control" value="{{old('name')}}" /> </div>
                    <div class="form-group">
                        <label class="control-label">Product Category</label>
                            <select class="form-control" name="cat_id">
                                <option value="-1">~~ Choose one of category ~~ </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }} </option> 
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Item Related Tags</label>
                        <input type="text" value="{{old('hashtag')}}" placeholder="Separate with commas" data-role="tagsinput" name="hashtag" id="hashtags"/>
                    </div>
                    {{-- <div class="form-group">
                        <label class="control-label">Item Related Tags</label>
                        <input type="text" name="hashtag" placeholder="Choose at least 3 hashtags " class="form-control" value="{{old('hashtags')}}" /> </div> --}}
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea name="descr" class="form-control" rows="10">{{old('descr')}}</textarea>
                    </div>
                    <div id="id-custom-fields">
                        <div class="form-group">
                            <div class="margiv-top-10">
                                <a href="javascript:;" class="btn blue" onClick="addCustomField(); return false;"> Add More Attributes Fields </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Price</label>
                        <input type="text" name="price" value="{{old('price')}}" placeholder="Example - 20000" class="form-control" /> </div>
                    <div class="form-group">
                        <label class="control-label">Quantity</label>
                        <input type="text" name="quantity" value="{{old('quantity')}}" placeholder="Example - 5" class="form-control" /> </div>
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input type="file" placeholder="example.jpg" name="image_url" /> </div>
                    <div class="margiv-top-10">
                        <button type="submit" class="btn green">Save Changes</button>
                        <a href="home" class="btn default"> Cancel </a>
                    </div>
                    <hr>
                    <script type="text/javascript">
                        var customFieldIndex = 0;

                        function addCustomField() {
                            var $ = jQuery;
                            customFieldIndex++;
                            var html = '\
                        <div id="id-custom-field-' + customFieldIndex + '" class="form-group" style="padding-bottom: 30px;">\
                              <div class="col-md-5">\
                                <input type="text" id="id-input-custom-field-key-' + customFieldIndex + '" name="custom_fields_keys[]" class="form-control" placeholder="Title" value="">\
                              </div>\
                              <div class="col-md-5">\
                                                            <input type="text" id="id-input-custom-field-value-' + customFieldIndex + '" name="custom_fields_values[]" class="form-control" placeholder="Attributew" value="">\
                              </div>\
                              <div class="col-md-2">\
                                <a href="#" class="btn btn-danger" onClick="removeCustomField(' + customFieldIndex + '); return false;"><i class="entypo-trash"></i> Remove</a>\
                              </div>\
                        </div>';
                            $("#id-custom-fields").append(html);
                        }
                        function removeCustomField(i) {
                            var $ = jQuery;
                            var cf = $("#id-custom-field-" + i);
                            if (cf != undefined) {
                                cf.remove();
                            }
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>

@endsection