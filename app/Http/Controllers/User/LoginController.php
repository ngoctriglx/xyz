<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User,App\Info,Auth;;
class LoginController extends Controller
{
    public function getLogin(){
        return view('home.login');
    }
    
    public function getLogout(){
        if(!Auth::check()){
            redirect()->route('home.get.blog');
        }
        Auth::logout();
        return redirect()->route('home.get.blog');
    }
    public function getFacebookRedirect($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function getFacebookCallback($provider){
        $facebook = Socialite::driver($provider)->user();
        // echo $facebook->id.'<br>';
        // echo $facebook->email.'<br>';
        // echo $facebook->name.'<br>';
        // echo $facebook->avatar.'<br>';
        // echo $provider.'<br>';
        if(!$facebook->email){
            return back()->with("error","Tài khoản chưa liên kết gmail");
        }
        else{
            $count = User::where('email',$facebook->email)->count();
            $finduser = User::where('email',$facebook->email)->first();
            if($count > 0){
                Auth::login($finduser);
                return redirect()->route('home.get.blog');
            }
            else{
                $user = new User;
                $user['email'] =  $facebook->email;
                $user->save();
                $user_id = $user->id;
                $info = new info;
                $info['user_id'] = $user_id;
                $info['name'] = $facebook->name;
                $info['avatar'] = $facebook->avatar;
                $info->save();
                Auth::login($user);
                return redirect()->route('home.get.blog');
            }
        }
    }
    public function getGoogleRedirect($provider){
        
        return Socialite::driver($provider)->redirect();
    }
   
    public function getGoogleCallback($provider){
        try {
            $google = Socialite::driver($provider)->user();
            $finduser = User::where('email', $google->email)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->route('home.get.blog');
           }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'google_id'=> $user->id,
                //     'password' => encrypt('123456dummy')
                // ]);
                // Auth::login($newUser);
                // return redirect('/home');
                $user = new User();
                $user['email'] = $google->email;
                $user->save();
                $user_id = $user->id;
                $info = new info();
                $info['user_id'] = $user_id;
                $info['name'] = $google->name;
                $info['avatar'] = $google->avatar;
                $info->save();
                Auth::login($user);
                return redirect()->route('home.get.blog');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
