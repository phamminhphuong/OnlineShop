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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length">
                            <label>
                                Show 
                                <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                 entries
                            </label>
                        </div>
                     </div>
                    <div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                {{--  @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>

                @endif  --}}
                <hr>
                    <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                        name
                                    : activate to sort column descending" style="width: 48px;">
                                        Id
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Old_price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        New_pirce
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Image
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Hot
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Description
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Vender
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Number_of_view
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 88px;">
                                        Number_of_sell
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        name
                                    : activate to sort column ascending" style="width: 60px;">
                                        Create_at
                                    </th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                                        old_price
                                    : activate to sort column ascending" style="width: 57px;">
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
                                           {!!$pd->old_price!!}
                                       </td>
                                       
                                       <td>
                                          
                                           {!!$pd->new_price!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->image!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->hot!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->description!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->vendor_id!!}
                                       
                                       </td>
                                       <td>
                                          
                                           {!!$pd->category_id!!}
                                       
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
                                           <a href="admin/product/edit/">Edit</a> |
                                           <a href="/Admin/Products/Details/4">Details</a> |
                                           <a href="admin/product/delete/">Delete</a>
                                       </td>
                               </tr>
                        
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
        </div>
    </div>
</section>
@endsection