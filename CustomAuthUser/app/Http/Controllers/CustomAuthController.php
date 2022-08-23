<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\custom;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function registration(){
        return view('auth.registration');
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customs',
            'password'=>'required|min:5|max:12'
        ]);

        $custom= new custom();
        $custom->name= $request->name;
        $custom->email= $request->email;
        $custom->password= Hash::make($request->password);
        $result=$custom->save();

        if($result){
            return back()->with('success', 'You have registerd successfuly.');
        }else{
            return back()->with('fail', 'Something went wrong.');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $custom=custom::where('email','=',$request->email)->first();
        if($custom){
            if(Hash::check($request->password,$custom->password)){
                 $request->session()->put('loginId',$custom->id);
                 return redirect('dashboard');
            }else{
                return back()->with('fail','Please enter correct password.');
            }

        }else{
            return back()->with('fail','This user is not registered.');
        }
    }

    public function dashboard(){
        $data= array();
        if(Session::has('loginId')){
            $data=custom::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }


}
