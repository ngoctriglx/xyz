<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;

class CreateController extends Controller
{
    public function getCreate(){
        return view('admin.create');
    }
    
    public function postCreate(Request $request){

        $this -> validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập title',
            'subtitle.required' => 'Vui lòng nhập subtitle',
            'author.required' => 'Vui lòng nhập author',
            'content.required' => 'Vui lòng nhập content'
        ]); 

        $title = $request['title'];
        $subtitle = $request['subtitle'];
        $author = $request['author'];
        $status = $request['status'];
        $content = $request['content'];

        $new = new news;
        //$ad = Auth::guard('admin')->user();
        //$id = $ad['id'];
        //$admin = admin::find($id);
        //$author2 = $admin['username'];
        $new['title'] = $title;
        $new['sub_title'] = $subtitle;
        $new['author'] = $author;
        $new['content'] = $content;
        $new -> save();
        //return redirect()->route('admin.new.get.list');
        return back()->with("error","Thêm bài viết mới thành công");

        // if($request -> hasFile('avatar')){
        //     $file = $request -> file('avatar');
        //     $fileType = $file -> getClientOriginalExtension('avatar');
        //     if($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){
        //        kiểm tra hình ảnh
        //         return redirect()->route('admin.user.get.list');
        //     }
        //     else{
        //         return back()->with("error","Phải là file ảnh (jpg , png ,jpeg)");
        //     }
        // }
        // else{
        //     return back()->with("error","Bạn chưa chọn avatar");
        // }
    }
}
