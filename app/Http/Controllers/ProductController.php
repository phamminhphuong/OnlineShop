<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vendor;
use App\Category;
class ProductController extends Controller
{
          //  danh sach
          public function getListProduct(){
            $product=Product::all();
            $vender=Vendor::all();
            $category=Category::all();
            return view('admin.product.list',['product'=>$product,'vender'=>$vender,'category'=>$category]);
         
        }
        // them moi
        public function getAddProduct(){
           $vendor=Vendor::all();
           $category=Category::all();
            return view('admin.product.add',['vendor'=>$vendor,'category'=>$category]);
        }

        public function postAddProduct(Request $request){
            $this->validate($request,[
                'name'=>'required|min:3|max:100',
                'description'=>'required|min:3|max:100'
            ],
            [
                'name.required'=>'Bạn phải nhập name',
                'name.min'=>'Nhập name trên 3 kí tự',
                'name.max'=>'Nhập name dưới 100 ký tự',
                'description.required'=>'Bạn phải nhập description',
                'description.min'=>'Nhập description trên 3 kí tự',
                'description.max'=>'Nhập description dưới 1000 ký tự'
               
            ]
            );
            $product=new Product();
            $product->name=$request->name;   
            $product->old_price=$request->old_price;   
            $product->new_price=$request->new_price;   
            $product->hot=$request->hot;   
            $product->description=$request->description;   
            $product->vendor_id=$request->vender_id;   
            $product->category_id=$request->category_id;   
            $product->number_of_view=0;   
            $product->number_of_sell=0;   
            if($request->hasFile('image')){
              $file=$request->file('image');
              $name=$file->getClientOriginalName();
              $image=str_random(20)."_".$name;
              $file->move('image',$image);
              $product->image=$image;
          }
          else{
              $product->image="";
          }
            $product->save();
            return redirect('admin/product/add')->with('thongbao','Bạn đã thêm product thành công');
        }
    
        //  sua
        public function getEditProduct($id){
           $product=Product::find($id);
           $vendor=Vendor::all();
           $category=Category::all();
           return view('admin.product.edit',['category'=>$category,'vendor'=>$vendor,'product'=>$product]);
          
        }
        public function postEditProduct(Request $request, $id){
            $this->validate($request,[
                'name'=>'required|min:3|max:100',
                'description'=>'required|min:3|max:100'
            ],
            [
                'name.required'=>'Bạn phải nhập name',
                'name.min'=>'Nhập name trên 3 kí tự',
                'name.max'=>'Nhập name dưới 100 ký tự',
                'description.required'=>'Bạn phải nhập description',
                'description.min'=>'Nhập description trên 3 kí tự',
                'description.max'=>'Nhập description dưới 1000 ký tự'
               
            ]
            );
            $product=Product::find($id);
            $product->name=$request->name;   
            $product->old_price=$request->old_price;   
            $product->new_price=$request->new_price;   
            $product->hot=$request->hot;   
            $product->description=$request->description;   
            $product->vendor_id=$request->vender_id;   
            $product->category_id=$request->category_id;   
            $product->number_of_view=0;   
            $product->number_of_sell=0;   
            if($request->hasFile('image')){
              $file=$request->file('image');
              $name=$file->getClientOriginalName();
              $image=str_random(20)."_".$name;
              $file->move('image',$image);
              $product->image=$image;
          }
          else{
              $product->image="";
          }
            $product->save();
            return redirect('admin/product/edit/'.$id)->with('thongbao','Bạn đã sửa product thành công');
        }
    
        //  xoa
        public function postDeleteProduct($id){
            $product=Product::find($id); 
            $product->Delete();
            return redirect('admin/product/list')->with('thongbao','Bạn đã xóa product thành công');
        }
}
