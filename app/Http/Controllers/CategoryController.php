<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;
class CategoryController extends Controller
{
         //  danh sach
         public function getListCategory(){
            $category=Category::all();
            $menu=Menu::all();
            return view('admin.category.list',['category'=>$category,'menu'=>$menu]);
         
        }
        // them moi
        public function getAddCategory(){
            $menu=Menu::all();
            return view('admin.category.add',['menu'=>$menu]);    
        }
        public function postAddCategory(Request $request){
            $this->validate($request,[
                'name'=>'required|min:3|max:100',
                
            ],
            [
                'name.required'=>'Bạn phải nhập name',
                'name.min'=>'Nhập name trên 3 kí tự',
                'name.max'=>'Nhập name dưới 100 ký tự',
               
            ]
            );
            $category=new Category();
            $category->name=$request->name;   
            $category->priority=$request->priority;   
            $category->menu_id=$request->menu_id;   
            $category->save();
            
            return redirect('admin/category/add')->with('thongbao','Bạn đã thêm category thành công');
            
        }
    
        //  sua
        public function getEditCategory($id){
           $category=Category::find($id);
           $menu=Menu::all();
           return view('admin.category.edit',['category'=>$category,'menu'=>$menu]);
          
        }
        public function postEditCategory(Request $request, $id){
            $this->validate($request,[
                'name'=>'required|min:3|max:100',
                
            ],
            [
                'name.required'=>'Bạn phải nhập name',
                'name.min'=>'Nhập name trên 3 kí tự',
                'name.max'=>'Nhập name dưới 100 ký tự',
               
            ]
            );
            $category=Category::find($id);
            $category->name=$request->name;   
            $category->priority=$request->priority;   
            $category->menu_id=$request->menu_id;   
            $category->save();
            
            return redirect('admin/category/edit/'.$id)->with('thongbao','Bạn đã sửa category thành công');
            
        }
    
        //  xoa
        public function postDeleteCategory($id){
            $category=Category::find($id); 
            $category->Delete();
            return redirect('admin/category/list')->with('thongbao','Bạn đã xóa category thành công');
        }
}
