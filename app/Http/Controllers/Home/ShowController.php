<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class ShowController extends Controller
{
    public function getHome(){
        return view('home.home');
    }
    
    public function getBlog(){
        $post = DB::table('posts')->orderBy('updated_at','desc')->paginate(20);
        return view('home.blog',['post' => $post]);
    }

    public function getBlogdetail($title){
        $id_posts ="";
        $post = DB::table('post')->where('title','=',$title)->get();
        foreach($bpost as $val){
            $id_posts = $val->id;
            $n = news::find($id_posts);
            $n['view'] += 1;
            $n->save();
        }
        $cmt = DB::table('comment')->where('news_id','=',$id_posts)->get();
        $user = DB::table('users')->get();
        return view('home.blogdetail',['post' => $post , 'cmt' => $cmt , 'user' => $user]);
    }
}
