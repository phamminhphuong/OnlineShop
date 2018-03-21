@extends('admin.layout.index') @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới user</h3>
        </div>

        <form action="admin/users/add" method="post" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <h4>User</h4>
                <hr> @if(count($errors) >0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err) {{$err}}
                    <br> @endforeach
                </div>
                @endif @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>

                @endif
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-2" for="name">UserName</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field name must be a string with a maximum length of 255."
                            data-val-length-max="255" id="title" name="username" type="text" value="" placeholder="Nhập userName">

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Password</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number."
                            id="password" name="password" type="password" value="" placeholder="Nhập passWord">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Name</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number."
                            id="name" name="name" type="text" value="" placeholder="Nhập name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="name">Date of birth</label>
                    <div class="col-md-10">
                        <input type="date" name="date_of_birth">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Email</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number."
                            id="email" name="email" type="email" value="" placeholder="Nhập email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="number_of_sell">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="vender_id">Address</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number."
                            id="address" name="address" type="text" value="" placeholder="Nhập address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="category_id">Phone</label>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-number="The field number_of_sell must be a number."
                            id="phone" name="phone" type="text" value="" placeholder="Nhập phone">

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="category_id">Type</label>
                    <div class="col-md-10">
                        <select class="form-control" id="type" name="type">
                            <option value="0">Admin</option>
                            <option value="1">Member</option>
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
        </form>
    </div>
    <div class="box-footer">
        <a href="admin/users/list">Back to List</a>
        <br>
    </div>
</section>

@endsection