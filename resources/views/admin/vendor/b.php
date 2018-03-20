@extends('admin.layout.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>Thêm tin tức</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" />
                    </div>
                   
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea class="form-control" rows="3" name="TomTat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="NoiDung"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="Hinh">
                    </div>
                    <div class="form-group">
                        <label>Loại tin</label>
                        <select class="form-control" name="LoaiTin">
                                @foreach($loaitin as $lt)
                                     <option value="{{$lt->id}}">{{$lt->TenLoaiTin}}</option>
                                @endforeach
                             </select>
                    </div>
              
                    <div class="form-group">
                            <label>Nổi bật</label>
                            <label class="radio-inline">
                                
                                <input name="rdoLevel" value="1" checked="" type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="rdoLevel" value="0" type="radio">Không
                            </label>
                    
                        
                        </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection