<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;

class AuthUserController extends Controller
{
    public function register(){
        return view('regis');
    }
    public function login(){
        return view('login');
    }

    public function logout(){
        session()->forget('id');
        session()->forget('type');
        return redirect('/login');
    }

    public function registerUser(Request $data){
        $data -> validate([
            'fname' =>'required',
            'pno' =>'required|min:11|numeric',
            'email' =>'required|unique:users|email',
            'gender' =>'required',
            'state' =>'required',
            'uname' =>'required',
            'password' =>'required|min:5',
            're_password' =>'required|same:password',
        ]);
        $newUser = new User();
        $newUser->fname=$data->input('fname');
        $newUser->pno=$data->input('pno');
        $newUser->email=$data->input('email');
        $newUser->gender=$data->input('gender');
        $newUser->state=$data->input('state');
        $newUser->uname=$data->input('uname');
        $newUser->password=md5($data->input('password'));
        $newUser->re_password=md5($data->input('re_password'));
        $newUser->type="Customer";

        if($newUser->save()){
            return redirect('login')->with('success','Congratulation! Your Account is Ready.');
        }
    }

    public function loginUser(Request $data){
        $user = User::where('uname',$data->input('uname'))->where('password',md5($data->input('password')))->first();
        if($user){
            session()->put('id',$user->id);
            session()->put('type',$user->type);
            if($user->type=='Customer'){
                return redirect('/');
            }
            else{
                return redirect('/admin');
            }
        }
        else{
            return redirect('login')->with('error','Uname/password is incorrect.');

        }

    }

    public function show()
    {
        $user = User::all();
        return view('admin.user',compact('user'));
    }

    public function changepasswordform(){
        return view('changepassword');
    }
    // public function processchangepassword(Request $request){
    // }
}
