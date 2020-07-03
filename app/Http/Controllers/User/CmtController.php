<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmtController extends Controller
{
    public function postComment(Request $request , $new_id){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cmt = new comment;
            $cmt['user_id'] = $user_id;
            $cmt['new_id'] = $new_id;
            $cmt['content'] = $request['content'];
            $cmt->save();
            return back();
        }
        else{
            return back()->with('phanquyen' , 'Bạn chưa đăng nhập !');
        }
    }
}
