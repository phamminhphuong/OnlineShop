<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
     //  danh sach
     public function getListPost(){
        $post=Post::all();
        return view('admin.post.list',['post'=>$post]);

    }
    // them moi
    public function getAddPost(){
        return view('admin.post.add');    
    }
    public function postAddPost(Request $request){
        $this->validate($request,[
            'title'=>'required|min:3|max:100',
            'content'=>'required|min:3|max:1000'
            
        ],
        [
            'title.required'=>'Bạn phải nhập title',
            'title.min'=>'Nhập title trên 3 kí tự',
            'title.max'=>'Nhập title dưới 100 ký tự',
            'content.required'=>'Bạn phải nhập content',
            'content.min'=>'Nhập content trên 3 kí tự',
            'content.max'=>'Nhập content dưới 1000 ký tự',
        ]
        );
        $post=new Post();
        $post->title=$request->title;   
        $post->content=$request->content;   
        $post->save();
        
        return redirect('admin/post/add')->with('thongbao','Bạn đã thêm post thành công');
        
    }

    //  sua
    public function getEditPost($id){
       $post=post::find($id);
       return view('admin.post.edit',['post'=>$post]);
      
    }
    public function postEditPost(Request $request, $id){
        $this->validate($request,[
            'title'=>'required|min:3|max:100',
            'content'=>'required|min:3|max:1000'
            
        ],
        [
            'title.required'=>'Bạn phải nhập title',
            'title.min'=>'Nhập title trên 3 kí tự',
            'title.max'=>'Nhập title dưới 100 ký tự',
            'content.required'=>'Bạn phải nhập content',
            'content.min'=>'Nhập content trên 3 kí tự',
            'content.max'=>'Nhập content dưới 1000 ký tự',
        ]
        );
        $post=Post::find($id);
        $post->title=$request->title;   
        $post->content=$request->content;   
        $post->save();
        return redirect('admin/post/edit/'.$id)->with('thongbao','Bạn đã sửa post thành công');
    }

    //  xoa
    public function postDeletePost($id){
        $post=Post::find($id); 
        $post->Delete();
        return redirect('admin/post/list')->with('thongbao','Bạn đã xóa post thành công');
    }
}
