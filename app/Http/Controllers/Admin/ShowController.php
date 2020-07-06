<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function getDashboard(){
        return view('admin.dashboard');
    }
    public function getPost(){
        return view('admin.post');
    }
}
