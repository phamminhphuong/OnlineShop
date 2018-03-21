<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
class SlideController extends Controller
{
     //  danh sach
     public function getListSlide(){
         $slide=Slide::all();
        return view('admin.slide.list',['slide'=>$slide]);
     
    }
    // them moi
    public function getAddSlide(){
        return view('admin.slide.add');
    }

    public function postAddSlide(Request $request){
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
        $slide=new Slide();
        $slide->title=$request->title;   
        $slide->link=$request->link;   
        if($request->hasFile('image')){
          $file=$request->file('image');
          $name=$file->getClientOriginalName();
          $image=str_random(20)."_".$name;
          $file->move('image_slide',$image);
          $slide->image=$image;
      }
      else{
          $slide->image="";
      }
        $slide->save();
        return redirect('admin/slide/add')->with('thongbao','Bạn đã thêm slide thành công');
    }

    //  sua
    public function getEditSlide($id){
       $slide=Slide::find($id);
       return view('admin.slide.edit',['slide'=>$slide]);
      
    }
    public function postEditSlide(Request $request, $id){
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
        $slide=Slide::find($id);
        $slide->title=$request->title;   
        $slide->link=$request->link;   
        if($request->hasFile('image')){
          $file=$request->file('image');
          $name=$file->getClientOriginalName();
          $image=str_random(20)."_".$name;
          $file->move('image_slide',$image);
          $slide->image=$image;
      }
      else{
          $slide->image="";
      }
        $slide->save();
        return redirect('admin/slide/edit/'.$id)->with('thongbao','Bạn đã sửa slide thành công');
    }

    //  xoa
    public function postDeleteSlide($id){
        $slide=Slide::find($id); 
        $slide->Delete();
        return redirect('admin/slide/list')->with('thongbao','Bạn đã xóa slide thành công');
    }
}
