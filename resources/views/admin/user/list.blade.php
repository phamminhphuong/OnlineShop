@extends('admin.layout.index') @section("content")
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách user</h3>
            <h3><a href="admin/users/add">Tạo mới</a></h3>
        </div>                  
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <hr> 
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>

                @endif
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                        name
                                    : activate to sort column descending">
                                        Id
                                    </th>
                                   
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                    name
                                : activate to sort column ascending">
                                        Image
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Date of birth
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                    name
                                : activate to sort column ascending">
                                    Email
                                </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                    name
                                : activate to sort column ascending">
                                    UserName
                                </th>

                                {{--  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                    name
                                : activate to sort column ascending" width:70px>
                                    Password
                                </th>  --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Address
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Phone
                                    </th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Type
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Create_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        old_price
                                    : activate to sort column ascending">
                                        Update_at
                                    </th>
                                    <th>
                                        Operation
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($user as $u)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {!!$u->id!!}
                                    </td>
                                   
                                    <td>
                                        {!!$u->name!!}
                                    </td> 
                                    <td>
                                        <img src="image_user/{!!$u->image!!}" width="80px" height="80px" alt="">
                                    </td>
                                    <td>

                                        {!!$u->date_of_birth!!}

                                    </td> 
                                    <td>

                                        {!!$u->email!!}

                                    </td>
                                    <td>
                                        {!!$u->username!!}
                                    </td>
                                    {{--  <td style="width:70px">
                                        {!!$u->password!!}
                                    </td>   --}}
                                   
                                    <td>

                                        {!!$u->address!!}

                                    </td> 
                                    <td>

                                        {!!$u->phone!!}

                                    </td>
                                   
                                    <td>

                                        {!!$u->type!!}

                                    </td>

                                    <td>
                                        {!!$u->created_at!!}
                                    </td>

                                    <td>
                                        {!!$u->updated_at!!}
                                    </td>

                                    <td>
                                        <a href="admin/users/edit/{!!$u->id!!}">Edit</a> |
                                        <a href="/Admin/Products/Details/4">Details</a> |
                                        <a href="admin/users/delete/{!!$u->id!!}">Delete</a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(function () {
            $('#example1').DataTable();
        })
    </script>
@endsection
