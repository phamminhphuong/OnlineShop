<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;
class ConfigController extends Controller
{
         //  danh sach
         public function getListConfig(){
            $config=Config::all();
           return view('admin.config.list',['config'=>$config]);
        
       }
       // them moi
       public function getAddConfig(){
           return view('admin.config.add');
       }
    
       public function postAddConfig(Request $request){
           $this->validate($request,[
               'key'=>'required|min:3|max:100',
               'value'=>'required|min:3|max:255',
           ],
           [
               'key.required'=>'Bạn phải nhập key',
               'key.min'=>'Nhập key trên 3 kí tự',
               'key.max'=>'Nhập key dưới 1000 ký tự',
               'value.required'=>'Bạn phải nhập value',
               'value.min'=>'Nhập value trên 3 kí tự',
               'value.max'=>'Nhập value dưới 255 kí tự'
              
           ]
           );
           $config=new Config();
           $config->key=$request->key;   
           $config->value=$request->value;   
           $config->save();
           return redirect('admin/config/add')->with('thongbao','Bạn đã thêm config thành công');
       }
    
       //  sua
       public function getEditConfig($id){
          $config=Config::find($id);
          return view('admin.config.edit',['config'=>$config]);
         
       }
       public function postEditConfig(Request $request, $id){
        $this->validate($request,[
            'key'=>'required|min:3|max:100',
            'value'=>'required|min:3|max:255',
        ],
        [
            'key.required'=>'Bạn phải nhập key',
            'key.min'=>'Nhập key trên 3 kí tự',
            'key.max'=>'Nhập key dưới 1000 ký tự',
            'value.required'=>'Bạn phải nhập value',
            'value.min'=>'Nhập value trên 3 kí tự',
            'value.max'=>'Nhập value dưới 255 kí tự'
           
        ]
        );
        $config=Config::find($id);
        $config->key=$request->key;   
        $config->value=$request->value;   
        $config->save();
        return redirect('admin/config/edit/'.$id)->with('thongbao','Bạn đã sửa config thành công');
       }
    
       //  xoa
       public function postDeleteConfig($id){
           $config=Config::find($id); 
           $config->Delete();
           return redirect('admin/config/list')->with('thongbao','Bạn đã xóa config thành công');
       }
}
