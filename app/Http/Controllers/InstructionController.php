<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruction;
class InstructionController extends Controller
{
     //  danh sach
     public function getListIntruction(){
        $instruction=Instruction::all();
       return view('admin.instruction.list',['instruction'=>$instruction]);
    
   }
   // them moi
   public function getAddIntruction(){
       return view('admin.instruction.add');
   }

   public function postAddIntruction(Request $request){
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
       $instruction=new Instruction();
       $instruction->title=$request->title;   
       $instruction->link=$request->link;   
       $instruction->save();
       return redirect('admin/instruction/add')->with('thongbao','Bạn đã thêm instruction thành công');
   }

   //  sua
   public function getEditIntruction($id){
      $instruction=Instruction::find($id);
      return view('admin.instruction.edit',['instruction'=>$instruction]);
     
   }
   public function postEditIntruction(Request $request, $id){
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
    $instruction=Instruction::find($id);
    $instruction->title=$request->title;   
    $instruction->link=$request->link;   
    $instruction->save();
    return redirect('admin/instruction/edit/'.$id)->with('thongbao','Bạn đã sửa instruction thành công');
   }

   //  xoa
   public function postDeleteIntruction($id){
       $instruction=Instruction::find($id); 
       $instruction->Delete();
       return redirect('admin/instruction/list')->with('thongbao','Bạn đã xóa instruction thành công');
   }
}
