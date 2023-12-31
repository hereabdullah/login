<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facade,\Hash;

class MainController extends Controller
{
     function login(){
        return view('auth.login');
     }

     function register(){
        return view('auth.register');
     }

     function save(Request $request)
     {
        //return $request->input();
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12',

        ]);



        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make( $request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New user has been added to database successfully');
        }
        else{
            return back()->with('fail', 'something went wrong try again later');
        }

     }

     function check(Request $request)
     {
        //return $request->input();

        $request->validate([
            // 'email'=>'required|email',
            'email' => 'email:rfc,dns',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();
        if(!$userInfo){
            return back()->with('fail','we donot recognize your email');
        }

        else
        {
            //check passsowrd
            if(Hash::check($request->password,$userInfo->password)){
            $request->session()->put('LoggedUser',$userInfo->id);
            return redirect('admin/dashboard');
            }
            else
            {
            return back()->with('fail','Incorrect password');
            }
     }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard()
    {
        $data= ['LoggedUserInfo' =>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }

    function settings(){
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function profile()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }

    function staff()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }

}
