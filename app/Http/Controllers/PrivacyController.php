<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privacy;
class PrivacyController extends Controller
{
    //  danh sach
    public function getListPrivacy(){
        $privacy=Privacy::all();
       return view('admin.privacy.list',['privacy'=>$privacy]);
    
   }
   // them moi
   public function getAddPrivacy(){
       return view('admin.privacy.add');
   }

   public function postAddPrivacy(Request $request){
       $this->validate($request,[
           'title'=>'required|min:3|max:100',
           'link'=>'required|min:3',
       ],
       [
           'title.required'=>'Bạn phải nhập title',
           'title.min'=>'Nhập title trên 3 kí tự',
           'title.max'=>'Nhập title dưới 1000 ký tự',
           'link.required'=>'Bạn phải nhập link',
           'link.min'=>'Nhập link trên 3 kí tự'
          
       ]
       );
       $privacy=new Privacy();
       $privacy->title=$request->title;   
       $privacy->link=$request->link;   
       $privacy->save();
       return redirect('admin/privacy/add')->with('thongbao','Bạn đã thêm privacy thành công');
   }

   //  sua
   public function getEditPrivacy($id){
      $privacy=Privacy::find($id)   ;
      return view('admin.privacy.edit',['privacy'=>$privacy]);
     
   }
   public function postEditPrivacy(Request $request, $id){
    $this->validate($request,[
        'title'=>'required|min:3|max:100',
        'link'=>'required|min:3',
    ],
    [
        'title.required'=>'Bạn phải nhập title',
        'title.min'=>'Nhập title trên 3 kí tự', 
        'title.max'=>'Nhập title dưới 1000 ký tự',
        'link.required'=>'Bạn phải nhập link',
        'link.min'=>'Nhập link trên 3 kí tự'
       
    ]
    );
    $privacy=Privacy::find($id);
    $privacy->title=$request->title;   
    $privacy->link=$request->link;   
    $privacy->save();
    return redirect('admin/privacy/edit/'.$id)->with('thongbao','Bạn đã sửa privacy thành công');
   }

   //  xoa
   public function postDeletePrivacy($id){
       $privacy=Privacy::find($id); 
       $privacy->Delete();
       return redirect('admin/privacy/list')->with('thongbao','Bạn đã xóa privacy thành công');
   }
}
