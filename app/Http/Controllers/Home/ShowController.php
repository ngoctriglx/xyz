<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class ShowController extends Controller
{
    public function getHome(){
        return view('home.home');
    }
    
    public function getBlog(){
        $blog = DB::table('news')->orderBy('updated_at','desc')->paginate(7);
        return view('home.blog',['blog' => $blog]);
    }

    public function getBlogdetail($title){
        $id_news ="";
        $new = DB::table('news')->where('title','=',$title)->get();
        foreach($new as $val){
            $id_news = $val->id;
            $n = news::find($id_news);
            $n['view'] += 1;
            $n->save();
        }
        $cmt = DB::table('comment')->where('news_id','=',$id_news)->get();
        $user = DB::table('users')->get();
        return view('home.blogdetail',['new' => $new , 'cmt' => $cmt , 'user' => $user]);
    }
}
