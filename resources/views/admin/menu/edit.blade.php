@extends('admin.layout.index')
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa menu</h3>
        </div>
        
<form action="admin/menu/edit/{!!$menu->id!!}" method="post">
    <input name="_token" type="hidden" value="{{csrf_token()}}">          
      <div class="form-horizontal">
                <h4>Menu</h4>
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
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field name must be a string with a maximum length of 255." data-val-length-max="255" id="name" name="name" type="text" value="{!!$menu->name!!}" placeholder="Nhập name">
                    </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-2" for="number_of_sell">Priotity</label>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number." id="priority" name="priority" type="number" value="{!!$menu->priority!!}">
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
        <a href="admin/menu/list">Back to List</a>
    </div>
</section>

@endsection