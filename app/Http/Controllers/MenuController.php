<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
class MenuController extends Controller
{
    public function getListMenu(){
        $menu=Menu::all();
        return view('admin.menu.list',['menu'=>$menu]);
    }
        // them moi
        public function getAddMenu(){
            return view('admin.menu.add');    
        }
        public function postAddMenu(Request $request){
            $this->validate($request,[
                'name'=>'required|min:3|max:100'
            ],
            [
                'name.required'=>'Bạn phải nhập name',
                'name.min'=>'Nhập name trên 3 kí tự',
                'name.max'=>'Nhập name dưới 100 ký tự',
            ]
            );
            $menu=new Menu();
            $menu->name=$request->name;   
            $menu->priority=$request->priority;   
            $menu->save();
            return redirect('admin/menu/add')->with('thongbao','Bạn đã thêm menu thành công');
            
        }
    
        //  sua
        public function getEditMenu($id){
           $menu=Menu::find($id);
           echo $menu;
           return view('admin.menu.edit',['menu'=>$menu]);

          
        }
        public function postEditMenu(Request $request, $id){
            $this->validate($request,[
                'name'=>'required|min:3|max:100'
            ],
            [
                'name.required'=>'Bạn phải nhập name',
                'name.min'=>'Nhập name trên 3 kí tự',
                'name.max'=>'Nhập name dưới 100 ký tự',
            ]
            );
            $menu=Menu::find($id);
            $menu->name=$request->name;   
            $menu->priority=$request->priority;   
            $menu->save();
            return redirect('admin/menu/edit/'.$id)->with('thongbao','Bạn đã sửa menu thành công');
        }
    
        //  xoa
        public function postDeleteMenu($id){
            $menu=Menu::find($id); 
            $menu->Delete();
            return redirect('admin/menu/list')->with('thongbao','Bạn đã xóa menu thành công');
        }
}
