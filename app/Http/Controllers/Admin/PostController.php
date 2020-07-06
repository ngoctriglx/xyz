<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAdd(){
        return view('admin.postCtrl.add');
    }
    public function getDetail(){
        return view('admin.postCtrl.detail');
    }
    public function getEdit(){
        return view('admin.postCtrl.edit');
    }

    public function postAdd(Request $request){
        
    }
}
