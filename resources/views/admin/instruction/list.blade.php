@extends('admin.layout.index')
@section("content")
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách instruction</h3>
            <h3><a href="admin/instruction/add">Tạo mới</a></h3>
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
                    <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                        name
                                    : activate to sort column descending">
                                        Id
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" >
                                        Title
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Link
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" >
                                        Create_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        old_price
                                    : activate to sort column ascending" >
                                        Update_at
                                    </th>
                                    <th>
                                        Operation
                                    </th>
                            </thead>
                            <tbody>
                             
                                
                                    @foreach($instruction as $ist)
                                   <tr role="row" class="odd">
                                       <td class="sorting_1">
                                           {!!$ist->id!!}
                                       </td>
                                       <td>
                                        {!!$ist->title!!}
                                       </td>
                                       
                                       <td>
                                            {!!$ist->link!!}
                                       </td>
                                       <td>
                                           {!!$ist->created_at!!}
                                       </td>
                                   
                                       <td>
                                            {!!$ist->updated_at!!}
                                       </td>
                               
                                       <td>
                                           <a href="admin/instruction/edit/{!!$ist->id!!}">Edit</a> |
                                           <a href="/Admin/Products/Details/4">Details</a> |
                                           <a href="admin/instruction/delete/{!!$ist->id!!}">Delete</a>
                                       </td>
                               </tr>
                        
                        @endforeach
                      
                    </tbody>
            </table>
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
