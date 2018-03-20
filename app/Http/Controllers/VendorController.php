<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
class VendorController extends Controller
{
    //  danh sach
    public function getListVendor(){
        $vendor=Vendor::all();
        return view('admin.vendor.list',['vendor'=>$vendor]);

    }
    // them moi
    public function getAddVendor(){
        return view('admin.vendor.add');    
    }
    public function postAddVendor(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:100'
        ],
        [
            'name.required'=>'Bạn phải nhập name',
            'name.min'=>'Nhập name trên 3 kí tự',
            'name.max'=>'Nhập name dưới 100 ký tự',
        ]
        );
        $vendor=new Vendor();
        $vendor->name=$request->name;   
        $vendor->save();
        
        return redirect('admin/vendor/add')->with('thongbao','Bạn đã thêm thành công');
        
    }

    //  sua
    public function getEditVendor($id){
       $vendor=Vendor::find($id);
       return view('admin.vendor.edit',['vendor'=>$vendor]);
      
    }
    public function postEditVendor(Request $request, $id){
        $this->validate($request,[
            'name'=>'required|min:3|max:100'
        ],
        [
            'name.required'=>'Bạn phải nhập name',
            'name.min'=>'Nhập name trên 3 kí tự',
            'name.max'=>'Nhập name dưới 100 ký tự',
        ]
        );
        $vendor=Vendor::find($id);
        $vendor->name=$request->name;   
        $vendor->save();
        
        return redirect('admin/vendor/edit/'.$id)->with('thongbao','Bạn đã sửa vendor thành công');
    }

    //  xoa
    public function postDeleteVendor($id){
        $vendor=Vendor::find($id); 
        $vendor->Delete();
        return redirect('admin/vendor/list')->with('thongbao','Bạn đã xóa vendor thành công');
    }

    
}
