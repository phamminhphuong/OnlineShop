@extends('admin.layout.index')
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa slide</h3>
        </div>
        
<form action="admin/slide/edit/{!!$slide->id!!}" method="post" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{csrf_token()}}">          
      <div class="form-horizontal">
                <h4>Slide</h4>
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
                    <label class="control-label col-md-2" for="name">Title</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field name must be a string with a maximum length of 255." data-val-length-max="255" id="title" name="title" type="text" value="{!!$slide->title!!}" placeholder="Nhập title">
                        
                    </div>
                </div>
                
                <div class="form-group">

                    <label class="control-label col-md-2" for="number_of_sell">Image</label>
                    <div class="col-md-10">
                        <img src="image_slide/{!!$slide->image!!}" width="300px" height="200px" alt="">
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-2" for="name">Link</label>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field name must be a string with a maximum length of 255." data-val-length-max="255" id="title" name="link" type="text" value="{!!$slide->link!!}" placeholder="Nhập link">
                            
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Edit" class="btn btn-default">
                        <input type="reset" value="Reset" class="btn btn-default">
                    </div>
                </div>
            </div>
</form>        </div>
    <div class="box-footer">
        <a href="admin/slide/list">Back to List</a>
    </div>
</section>

@endsection