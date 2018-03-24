<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
            //  danh sach
            public function getListUser(){
                $user=User::all();
                return view('admin.user.list',['user'=>$user]);
             
            }
            // them moi
            public function getAddUser(){
                return view('admin.user.add');
            }
    
            public function postAddUser(Request $request){
                $this->validate($request,[
                    'username'=>'required|min:3|max:100',
                    'password'=>'required|min:3|max:7',
                    'name'=>'required|min:3|max:100',
                    'email'=>'required|unique:users|min:3|max:32',
                    'address'=>'required|min:3|max:255',
                    'phone'=>'required|min:10|max:12',
                ],
                [
                    'username.required'=>'Bạn phải nhập username',
                    'username.min'=>'Nhập username trên 3 kí tự',
                    'username.max'=>'Nhập username dưới 100 ký tự',

                    'password.required'=>'Bạn phải nhập password',
                    'password.min'=>'Nhập password trên 3 kí tự',
                    'password.max'=>'Nhập password dưới 7 ký tự',

                    'name.required'=>'Bạn phải nhập name',
                    'name.min'=>'Nhập name trên 3 kí tự',
                    'name.max'=>'Nhập name dưới 100 ký tự',

                    'email.required'=>'Bạn phải nhập email',
                    'email.unique'=>'Không được nhập trùng email',
                    'email.min'=>'Nhập email trên 3 kí tự',
                    'email.max'=>'Nhập email dưới 32 ký tự',

                    'address.required'=>'Bạn phải nhập address',
                    'address.min'=>'Nhập address trên 3 kí tự',
                    'address.max'=>'Nhập address dưới 255 ký tự',

                    'phone.required'=>'Bạn phải nhập phone',
                    'phone.min'=>'Nhập phone trên 10 kí tự',
                    'phone.max'=>'Nhập phone dưới 12 ký tự',
                   
                   
                ]
                );
                $user=new User();
                $user->username=$request->username;   
                $user->password=bcrypt($request->password);   
                $user->name=$request->name;   
                $user->email=$request->email;   
                $user->date_of_birth=$request->date_of_birth;   
                $user->address=$request->address; 
                $user->phone=$request->phone; 
                $user->type=$request->type; 
                if($request->hasFile('image')){
                  $file=$request->file('image');
                  $name=$file->getClientOriginalName();
                  $image=str_random(20)."_".$name;
                  $file->move('image_user',$image);
                  $user->image=$image;
              }
              else{
                  $user->image="";
              }
                $user->save();
                return redirect('admin/users/add')->with('thongbao','Bạn đã thêm user thành công');
            }
        
            //  sua
            public function getEditUser($id){
               $user=User::find($id);
               return view('admin.user.edit',['user'=>$user]);
              
            }
            public function postEditUser(Request $request, $id){
                $this->validate($request,[
                    'username'=>'required|min:3|max:100',
                    'password'=>'required|min:3|max:7',
                    'name'=>'required|min:3|max:100',
                    'address'=>'required|min:3|max:255',
                    'phone'=>'required|min:10|max:12',
                ],
                [
                    'username.required'=>'Bạn phải nhập username',
                    'username.min'=>'Nhập username trên 3 kí tự',
                    'username.max'=>'Nhập username dưới 100 ký tự',

                    'password.required'=>'Bạn phải nhập password',
                    'password.min'=>'Nhập password trên 3 kí tự',
                    'password.max'=>'Nhập password dưới 7 ký tự',

                    'name.required'=>'Bạn phải nhập name',
                    'name.min'=>'Nhập name trên 3 kí tự',
                    'name.max'=>'Nhập name dưới 100 ký tự',

                    'address.required'=>'Bạn phải nhập address',
                    'address.min'=>'Nhập address trên 3 kí tự',
                    'address.max'=>'Nhập address dưới 255 ký tự',

                    'phone.required'=>'Bạn phải nhập phone',
                    'phone.min'=>'Nhập phone trên 10 kí tự',
                    'phone.max'=>'Nhập phone dưới 12 ký tự',
                   
                   
                ]
                );
                $user=User::find($id);
                $user->username=$request->username;   
                $user->password=bcrypt($request->password);   
                $user->name=$request->name;   
                $user->date_of_birth=$request->date_of_birth;   
                $user->address=$request->address; 
                $user->phone=$request->phone; 
                $user->type=$request->type; 
                if($request->hasFile('image')){
                  $file=$request->file('image');
                  $name=$file->getClientOriginalName();
                  $image=str_random(20)."_".$name;
                  $file->move('image_user',$image);
                  $user->image=$image;
              }
              else{
                  $user->image="";
              }
                $user->save();
                return redirect('admin/users/edit/'.$id)->with('thongbao','Bạn đã sửa user thành công');
            }
        
            //  xoa
            public function postDeleteUser($id){
                $user=User::find($id); 
                $user->Delete();
                return redirect('admin/users/list')->with('thongbao','Bạn đã xóa user thành công');
            }
}
