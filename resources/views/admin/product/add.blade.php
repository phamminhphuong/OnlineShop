@extends('admin.layout.index')
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới product</h3>
        </div>
        
<form action="admin/product/add" method="post" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{csrf_token()}}">          
      <div class="form-horizontal">
                <h4>Product</h4>
                <hr>
                @if(count($errors) >0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)  
                                {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>

                @endif
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-2" for="name">Name</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field name must be a string with a maximum length of 255." data-val-length-max="255" id="title" name="name" type="text" value="" placeholder="Nhập name">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Old_pricec</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number." id="priority" name="old_price" type="number" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">New_pricec</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number." id="priority" name="new_price" type="number" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="image">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Hot</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number." id="priority" name="hot" type="number" value="0">
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="control-label col-md-2" for="name">Description</label>
                    <div class="col-md-10">
                        <textarea class="ckeditor" name="description" id="ckeditor" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="vender_id">Vendor</label>
                    <div class="col-md-10">
                        <select class="form-control" id="vender_id" name="vender_id">
                            @foreach($vendor as $vd)
                                <option value="{!!$vd->id!!}">{!!$vd->name!!}</option>
                            @endforeach
                        
                        </select>
                         <span class="field-validation-valid text-danger" data-valmsg-for="category_id" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="category_id">Category</label>
                    <div class="col-md-10">
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($category as $ct)
                                <option value="{!!$ct->id!!}">{!!$ct->name!!}</option>
                            @endforeach
                            
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Create" class="btn btn-default">
                        <input type="reset" value="Reset" class="btn btn-default">
                    </div>
                </div>
            </div>
</form>        </div>
    <div class="box-footer">
        <a href="admin/product/list">Back to List</a>
    </div>
</section>

@endsection