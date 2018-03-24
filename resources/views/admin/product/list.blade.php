@extends('admin.layout.index')
@section("content")
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách product</h3>
            <h3><a href="admin/product/add">Tạo mới</a></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
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
                                        name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                    name
                                : activate to sort column ascending" >
                                    Image
                                </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Old_price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" >
                                        New_pirce
                                    </th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" >
                                        Hot
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" >
                                        Description
                                    </th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Number_of_view
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending">
                                        Number_of_sell
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" >
                                        Create_at
                                    </th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        old_price
                                    : activate to sort column ascending" >
                                        Update_at
                                    </th>
                                    <th>
                                        Operation
                                    </th>
                            </thead>
                            <tbody>
                             
                                
                                    @foreach($product as $pd)
                                   <tr role="row" class="odd">
                                       <td class="sorting_1">
                                           {!!$pd->id!!}
                                       </td>
                                       <td>
                                           {!!$pd->name!!}
                                       </td>
                                       <td>
                                        <img src="image/{!!$pd->image!!}" width="80px" height="80px" alt="">
                                     </td>
                                       <td>
                                           {!!$pd->old_price!!}
                                       </td>
                                       
                                       <td>
                                          
                                           {!!$pd->new_price!!}
                                       
                                       </td>
                                      
                                       <td>
                                          
                                           {!!$pd->hot!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->description!!}
                                       
                                       </td>
                                      
                                       <td>
                                          
                                           {!!$pd->number_of_view!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->number_of_sell!!}
                                       
                                       </td>
                                      
                                       <td>
                                           {!!$pd->created_at!!}
                                       </td>
                                   
                                       <td>
                                            {!!$pd->updated_at!!}
                                       </td>
                               
                                       <td>
                                           <a href="admin/product/edit/{!!$pd->id!!}">Edit</a> |
                                           <a href="/Admin/Products/Details/4">Details</a> |
                                           <a href="admin/product/delete/{!!$pd->id!!}">Delete</a>
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
